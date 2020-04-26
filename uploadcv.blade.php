<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

</head>
<body>
 

 <div class="jumbotron">
 	<div class="container">
 		<div class="form-group" enctype="multipart/form-data" method="POST">
            <label class="col-md-3 control-label" name="resume">Drop resume file or click to upload:</label>
            <div class="col-md-8">
                <input  type="file" id="resume" placeholder="Resume" name="resume" class=""/>
                <span class="required" id='spnFileError'></span>
            </div>
        </div>  
        <button type="submit" id="btnUpload" class="custm-btn btn-primary" onclick="uploadFile();">Submit</button>                              
    </div>

 	</div>
 </div>
</body>
</html>