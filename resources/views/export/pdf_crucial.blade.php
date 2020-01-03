<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAPORAN SIZE DATABASE</title>
    <style>
        .footer .page-number:after {
            content: counter(page);
        }

        body {
            padding: 0;
            margin: 0;
        }

        .page {
            font-size: 24px !important;
            max-width: 80em;
            margin: 0 auto;
        }

        table {
            table-layout: auto !important;
            width: 100% !important;
        }


        table th,
        table td {
            text-align: center;
        }

        table.layout {
            width: 100%;
            border-collapse: collapse;
        }

        table.display {
            margin: 1em 0;
        }

        table.display th,
        table.display td {
            border-bottom: 1px solid black;
            padding: .2em 0, 8em;
        }

        table.display th {
            background: lightblue;
        }

        table.display td {
            background: #fff;
        }

        table.responsive-table {
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.2);
        }

        .listcust {
            margin: 0;
            padding: 0;
            list-style: none;
            display: table;
            border-spacing: 10px;
            border-collapse: separate;
            list-style-type: none;
        }

        .customer {
            padding-left: 600px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="elis/assets/img/logopak.png" alt="Image" height="125px"
            style="margin-left:400px;margin-top:-40px;margin-bottom:10px" />
        {{-- <img {{ asset('elis/assets/img/logo.png') }} alt="Image" height="100px" /> --}}
        {{-- <div style="float:right;margin-top:-30px"><h3>LAPORAN AVAILBILITY</h3></div> --}}
        {{-- <br> --}}
        {{-- <hr> --}}
        {{-- <h4 style="line-height: 0px;">Invoice: #{{ $kas->id }}</h4>
        <p><small style="opacity: 0.5;">{{ $kas->created_at->format('d-m-Y H:i:s') }}</small></p> --}}
    </div>
    <hr>
    <div style="">
        <h5>Tanggal Cetak : 30/12/2019</h5>
        <h5 style="margin-top:-30px">No : RPT/05/002</h5>
        <h5 style="margin-top:-30px">Perihal : Laporan Crucial Database</h5>
    </div>


    <div class="page">
        <h4 style="text-align:center">MySQL</h4>
        <table class="layout display responsive-table">
            <thead style="background-color:bisque;">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>DB_Name</th>
                    <th>Crucial_level</th>
                    <th>Space Usage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{$crucial_mysql[0]->insert_date}}</td>
                    <td>{{$name_mysql[0]->database_name}}</td>
                    <td>{{$crucial_mysql[0]->crucial_level}}</td>
                    <td>{{$crucial_mysql[0]->size}} %</td>
                </tr>

            </tbody>
        </table>
        <h4 style="text-align:center">Oracle</h4>
        <table class="layout display responsive-table">
            <thead style="background-color:bisque;">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>DB_Name</th>
                    <th>Crucial_level</th>
                    <th>Space Usage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{$crucial_oracle[0]->insert_date}}</td>
                    <td>{{$name_oracle[0]->database_name}}</td>
                    <td>{{$crucial_oracle[0]->crucial_level}}</td>
                    <td>{{$crucial_oracle[0]->size}} %</td>
                </tr>

            </tbody>
        </table>
        <h4 style="text-align:center">PostgreSQL</h4>
        <table class="layout display responsive-table">
            <thead style="background-color:bisque;">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>DB_Name</th>
                    <th>Crucial_level</th>
                    <th>Space Usage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{$crucial_postgresql[0]->insert_date}}</td>
                    <td>{{$name_postgresql[0]->database_name}}</td>
                    <td>{{$crucial_postgresql[0]->crucial_level}}</td>
                    <td>{{$crucial_postgresql[0]->size}} %</td>
                </tr>

            </tbody>
        </table>
    </div>
    <footer>
        {{-- <p>{{$url}}</p> --}}
        <p>http://localhost:8000/crucial_database</p>
        <div style="float:right;">
            <span class="page-number">Page 1</span>
        </div>
    </footer>

</body>

</html>