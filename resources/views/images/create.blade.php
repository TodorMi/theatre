@extends('layouts.app')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
                html, body {
                        font-weight: 200;
                        height: 100vh;
                        margin: 0;
                }

                .full-height {
                        height: 100vh;
                }

                .flex-center {
                        align-items: center;
                        display: flex;
                        justify-content: center;
                }

                .position-ref {
                        position: relative;
                }

                .top-right {
                        position: absolute;
                        right: 10px;
                        top: 18px;
                }

                .links > a {
                        padding: 0 25px;
                        font-size: 13px;
                        font-weight: 600;
                        letter-spacing: .1rem;
                        text-decoration: none;
                        text-transform: uppercase;
                }

        </style>
</head>
<body>
<div class="container">
        <h3>Upload a file:</h3><br/>
        <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
        {{csrf_field() }}
                        <div class="form-group">
                                <table class="table">
                                        <tr>
                                                <td width="40%" align="right"><label>Select file</label></td>
                                                <td width="30%"><input type="file" name="customImage"/></td>
                                                <td width="40%" align="left"><input type="submit" class="btn btn-primary" value="Upload"/></td>
                                        </tr>
                                        <tr>
                                                <td width="40%" align="right"></td>
                                                <td width="30%"><span class="text-muted">jpg, png, gif</span></td>
                                                <td width="40%" align="left"></td>
                                        </tr>
                                        <tr>
                                                <td width="40%" align="right"><label>Add a description</label></td>
                                                <td width="30%"><input type="text" name="imageDescription"/></td>
                                                <td width="40%" align="left"></td>
                                        </tr>
                                </table>
                        </div>
        </form>
</div>
</body>
</html>