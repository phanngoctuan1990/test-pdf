<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <style>
        html,
        body,
        div,
        span,
        h1,
        h2,
        h3,
        p,
        a,
        ul,
        li,
        table,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        footer,
        header,
        menu,
        nav {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline;
        }

        body {
            line-height: 1;
            font-size: 14px;
        }

        ul {
            list-style: none;
        }

        q {
            quotes: none;
        }

        q:before,
        q:after {
            content: "";
            content: none;
        }

        .text-sm {
            font-size: 11px;
        }

        .text-lg {
            font-size: 18px;
        }

        .text-xl {
            font-size: 20px;
        }

        .col-blue {
            background-color: #bdd7ee;
        }

        .table-bordered thead th {
            border-bottom-width: 1px;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #343a40;
        }

        .table thead th,
        .table thead td {
            border-bottom: 1px solid #343a40;
        }

        .border-gray {
            border: 1px solid #343a40 !important;
        }

        .bg-gray {
            background-color: #e7e6e6;
        }

        table {
            page-break-inside: auto;
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
        }
    </style>
</head>

<body>
    @foreach ($data as $items)
    <br>
    <table class="table table-sm table-bordered text-sm">
        <thead class="text-center bg-gray">
            <tr>
                <td style="width: 6%" class="pt-3" rowspan="2">
                    勤怠NO
                </td>
                <td class="pt-3" rowspan="2" style="width: 3%">NO</td>
                <td class="pt-3" rowspan="2" style="font-size: 8px; width: 4%">
                    年少者
                </td>
                <td class="pt-3" rowspan="2" style="font-size: 10px; width: 7%">
                    スタッフNO
                </td>
                <td class="pt-3" rowspan="2" style="width: 9%">氏名</td>
                <td class="pt-3" rowspan="2" style="width: 9%">カナ</td>
                <td class="pt-3" rowspan="2" style="width: 3%">性別</td>
                <td class="pt-3" rowspan="2" style="width: 4%">経験</td>
                <td class="pt-3" rowspan="2" style="width: 5%">制服</td>
                <td class="pt-3" rowspan="2" style="width: 5%">靴</td>
                <td class="pt-3" rowspan="2" style="width: 5%">備考</td>
                <td colspan="2">依頼時間</td>
                <td rowspan="2" style="width: 5%">
                    依頼 <br /><br />
                    通り
                </td>
                <td colspan="4">実績時間</td>
                <td class="pt-3" rowspan="2" style="width: 5%">欠勤</td>
                </trw>
            <tr>
                <td style="width: 5%">開始</td>
                <td style="width: 5%">終了</td>
                <td style="width: 5%">開始</td>
                <td style="width: 5%">終了</td>
                <td style="width: 5%">休憩(通常)</td>
                <td style="width: 5%">休憩(深夜)</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)
            <tr style="height: 34px">
                <td class="text-center text-lg">
                    {{ $item["col1"] }}
                </td>
                <td class="text-center">{{ $item["col2"] }}</td>
                <td class="{{
                            generateClass($key, 'col-blue text-center')
                        }}">
                    {{ $item["col3"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center text-lg') }}">
                    {{ $item["col4"] }}
                </td>
                <td class="{{ generateClass($key) }}">
                    {{ $item["col5"] }}
                </td>
                <td>{{ $item["col6"] }}</td>
                <td class="text-center">{{ $item["col7"] }}</td>
                <td class="col-blue"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col8"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col9"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col10"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col11"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col12"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">
                    {{ $item["col13"] }}
                </td>
                <td class="{{ generateClass($key, 'text-center') }}">：</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endforeach
</body>

</html>