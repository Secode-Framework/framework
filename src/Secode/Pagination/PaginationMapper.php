<?php

namespace Secode\Pagination;

class PaginationMapper
{
    public function requestToPagination(): Pagination
    {
        $sortCol = request('sortCol');
        $sortDir = request('sortDir');

        if ($sortCol && in_array($sortDir, ['asc', 'desc'])) {
            $sort = ['col' => self::camelToSnake($sortCol), 'dir' => $sortDir];
        } else {
            $sort = null;
        }

        $pageSize = request('pageSize') ?? 100;
        $page = request('page') ?? 1;

        if ($page == 1) {
            $offset = 0;
        } else {
            $offset = ($page - 1) * $pageSize;
        }

        return (new Pagination())
            ->setOffset($offset)
            ->setPage($page)
            ->setPageSize($pageSize)
            ->setSort($sort);
    }

    private function camelToSnake($str)
    {

        $result = "";

        if (strlen($str)) {

            $c = $str[0];
            $result = $result . strtolower($c);

            for ($i = 1; $i < strlen($str); $i++) {

                $ch = $str[$i];

                if ($ch === strtoupper($ch)) {
                    $result .= '_';
                }

                $result .= strtolower($ch);

            }
        }

        return $result;
    }
}
