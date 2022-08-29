<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">



  </head>
  <body >

      <div class="row">
        <div class="col-sm-12 filter-div <?php echo ($_SERVER['REQUEST_METHOD'] == "POST") ? "" : ""; ?>"
                            id="filter-div" style="padding-left:0px; padding-right:0px">
                            <div class="panel panel-white no-radius">
                                <div class="panel-heading border-light bg-primary">
                                    <h4 class="panel-title gfont"><i class="fa fa-search"></i>
                                        &nbsp; search <span class="text-bold"> </span></h4>
                                </div>
                                <div class="panel-body">

                                
                                        <!-- start table form -->

                                        <table class="table col-md-12 table-mobile" width="100%" 
                                            cellspacing="2" cellpadding="2">
                                            <tbody>
                                            <tr>
                                                <td width="20%"
                                                    class="text-bold"><?php echo 'PerPage'; ?></td>
                                                <td width="30%">
                                                    <select class=" w-100  form-control " 
                                                            name="perpage" id="perpage">
                                                        <option></option>
                                                        <option value="1"> 1 </option>
                                                        <option value="10"> 10 </option>
                                                            <option value="50"> 50 </option>
                                                            <option value="100"> 100 </option>
                                                    </select>
                                                </td>

                                                <td width="20%"
                                                    class="text-bold"><?php echo 'Page'; ?></td>
                                                <td width="30%">
                                                    <input type="text" id="page" placeholder="Number of Page" >
                                                 </td>

                                            </tr>
                                            <tr>
                                                <td width="20%"
                                                    class="text-bold"><?php echo 'Language'; ?></td>
                                                <td width="30%">
                                                    <select class="  form-control"
                                                            name="language" id="language">
                                                        <option></option>
                                                            <option value="php" > php</option>
                                                            <option value="TypeScript" > TypeScript</option>
                                                            <option value="python" > python</option>
                                                            <option value="scss" > scss</option>
                                                            <option value="c#" > c#</option>
                                                            <option value="java" > java</option>
                                                            <option value="javascript" > javascript</option>
                                                    </select>
                                                </td>

                                                <td width="20%"
                                                    class="text-bold"><?php echo 'Created By'; ?></td>
                                                <td width="30%"><input type='date' id="date"> </td>

                                            </tr>
                                            <tr>
                                                <td width="100%" colspan="4">

                                                    <button class="btn btn-primary w-100 d-block" id="search">search</button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>

                                        <!-- end table form -->


                                </div>
                            </div>
        </div>
      </div>

    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Developers</h3>
                            <div class="pull-right">
                                <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                    <i class="glyphicon glyphicon-filter"></i>
                                </span>
                            </div>
                        </div>
             
                        <table class="table table-hover table-striped" id="dev-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Language</th>
                                    <th>Name</th>
                                    <th>Created Date</th>
                                </tr>
                            </thead>

                            <tbody id="tableBody">
                            </tbody>

                        </table>
                    </div>
                </div>
            
            </div>
    </div>

    <script src="/task/main.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>