<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<s src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></s>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
    form{
 /* width: 370px; */
  margin: auto;
  border: 3px solid;
  padding: 20px;
        }
        body{
            margin: 100px;
        }
        img {
            width: 100px;   
        }
    </style>
    <body>
            <center>
            <form method="get" action="{{route('PostData')}}" id="form-data">
                {{csrf_field()}}
                <div class="text-center">
                    <img src="data:image/png;base64,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" class="rounded" alt="logo">
                  </div>
            <br>   <br> 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleInputname" name="name-person">
              </div>
              <div class="mb-3">
                <label for="exampleInputMobile1" class="form-label">Mobile</label>
                <input type="number" class="form-control" id="exampleInputmobile" name="mobile-person">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email-person">
                <br>  
                <div class="container">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Send</button>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <center>
                            <form>
                            <h3>please select the services that you are intrested in .  </h3>
                              <div class="d-grid gap-2">
                              <button class="btn btn-primary" type="button">Offer 1</button>
                              <button class="btn btn-primary" type="button">Offer 2</button>
                              <button class="btn btn-primary" type="button">Offer 3</button>
                            </div>
                            <br>
                            <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Next</button>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-light">Close</button>
                             </div></form>
                            </center>
                        </div>
                      </div>
                    </div>
                  </div>
              {{-- </div>
              <div class="d-grid gap-2">
              <button class="btn btn-primary" type="button">Send</button>
            </div>  --}}
            {{-- <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
<label class="btn btn-primary" for="btn-check-2">Checked</label> --}}
            </form>
            <script src="https\\code.jquery.com\jquery-3.3.1.min.js" type="text\javascript"></script>
            <script src="{{asset('js/post.js')}} "type="text\javascript"></script>
        </center>
    </body>
</html>