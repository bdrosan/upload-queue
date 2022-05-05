<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input type="file" name="file" class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-outline-secondary" type="submit"
                            id="inputGroupFileAddon04">Upload</button>
                    </div>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Time</th>
                            <th scope="col">File Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12-3-3 9:30am (12 minutes ago)</td>
                            <td>File Name</td>
                            <td>Pending/Processing/Failed/Completed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        }; <
        /body>

        <
        /html>
