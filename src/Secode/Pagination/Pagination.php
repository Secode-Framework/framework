<?php

namespace Secode\Pagination;

/**
 *
 */
class Pagination
{
    /**
     * @var int|null
     */
    private ?int $offset = 0;
    /**
     * @var int|null
     */
    private ?int $pageSize = 10;
    /**
     * @var int|null
     */
    private ?int $page = 1;
    /**
     * @var array|null
     */
    private ?array $sort = null;

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int|null $offset
     * @return $this
     */
    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @param int|null $pageSize
     * @return $this
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     * @return $this
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getSort(): ?array
    {
        return $this->sort;
    }

    /**
     * @param array|null $sort
     * @return $this
     */
    public function setSort(?array $sort): self
    {
        $this->sort = $sort;
        return $this;
    }


    public function toResponse($collector)
    {
        $cloneCollector = clone $collector;

        $collector = $collector->skip($this->getOffset())
            ->take($this->getPageSize());

        if ($sort = $this->getSort()) {
            //Agregar el sort
            $collector = $collector->orderBy($sort['col'], $sort['dir']);
        } else {
            $collector = $collector->orderBy('id', 'desc');
        }

        $totalRows = $cloneCollector->count();
        $lastPage = ceil($totalRows / $this->getPageSize());

        return [
            'lastPage' => $lastPage,
            'totalRows' => $totalRows,
            'data' => $collector->get()->all()
        ];
    }
}
