<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url("assets/logo/icon.png"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title><?= $title; ?></title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->

    <link rel="stylesheet" href="<?= base_url("/assets/admin/css/style.css"); ?>">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #7380ec;
            color: white;
        }

        .label {
            color: white;
            padding: 8px;
            font-family: Arial;
        }

        .success {
            background-color: #04AA6D;
        }

        /* Green */
        .info {
            background-color: #2196F3;
        }

        /* Blue */
        .warning {
            background-color: #ff9800;
        }

        /* Orange */
        .danger {
            background-color: #f44336;
        }

        /* Red */
        .other {
            background-color: #e7e7e7;
            color: black;
        }

        /* Gray */
    </style>
</head>


<body>