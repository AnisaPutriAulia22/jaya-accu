<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Card - BBBootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    /* Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #000;
    }

    .card {
      width: 350px;
      background-color: #efefef;
      border: none;
      cursor: pointer;
      transition: all 0.5s;
    }

    .image img {
      transition: all 0.5s;
    }

    .card:hover .image img {
      transform: scale(1.5);
    }

    .btn {
      height: 140px;
      width: 140px;
      border-radius: 50%;
    }

    .name {
      font-size: 22px;
      font-weight: bold;
    }

    .idd {
      font-size: 14px;
      font-weight: 600;
    }

    .idd1 {
      font-size: 12px;
    }

    .number {
      font-size: 22px;
      font-weight: bold;
    }

    .follow {
      font-size: 12px;
      font-weight: 500;
      color: #444;
    }

    .btn1 {
      height: 40px;
      width: 150px;
      border: none;
      background-color: #000;
      color: #aeaeae;
      font-size: 15px;
    }

    .text span {
      font-size: 13px;
      color: #545454;
      font-weight: 500;
    }

    .icons i {
      font-size: 19px;
    }

    .join {
      font-size: 14px;
      color: #a0a0a0;
      font-weight: bold;
    }

    .date {
      background-color: #ccc;
    }
  </style>
</head>

<body>
  <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
      <div class="image d-flex flex-column justify-content-center align-items-center">
        <button class="btn btn-secondary">
          <img src="images/icons/nezuko.png" height="100" width="100" alt="Profile Image">
        </button>
        <span class="name mt-3">{{ Auth::user()->name }}</span>
        <span class="idd">{{ Auth::user()->email }}</span>


        <div class="d-flex flex-row justify-content-center align-items-center gap-2">
          <span class="idd1"></span>
          
        </div>

      

 

        <div class="text mt-3">
          <span>
           <br><br><br><br>
            
          </span>
        </div>

   

       
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var myLink = document.querySelector('a[href="#"]');
    if (myLink) {
      myLink.addEventListener('click', function (e) {
        e.preventDefault();
      });
    }
  </script>
</body>

</html>
