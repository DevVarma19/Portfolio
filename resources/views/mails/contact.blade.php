<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail From Portfolio</title>
    <style>
  .container1 {
    padding: 4%;
    margin: 8% auto;
    background-color: #f6f6f6;
    width: 100%;
  }
  .title {
    background-color: #ebebeb;
    padding: 10px 8px;
    width: 80%;
    font-size: 10px;
  }
  .order {
    margin-left: 14%;
    padding: 2px 8px;
    width: 80%;
  }

  tr,
  td,
  th {
    line-height: 2;
    padding: 8px;
  }
  .bld {
    text-align: left;
    font-weight: 700;
  }
  th {
    text-align: left;
  }
  .val {
    text-align: left;
    font-weight: 500;
    padding-left: 10px;
  }
  table {
    width: 80%;
    border-collapse: collapse;
  }
  table tr {
    border: none;
    border-bottom: 1px solid rgb(196, 196, 196);
    color: #333;
    overflow: visible;
    text-align: center;
    height: 5px;
  }
  .cont {
    text-align: center;
    margin-top: 4%;
    line-height: 2;
  }
  body {
    font-family: sans-serif;
  }
  .mob {
    padding: 0.8%;
    border-radius: 4px;
    border: 1px solid #ccc;
    box-shadow: none !important;
  }
  .btn {
    padding: 0.8% 2%;
    background-color: red;
    border: none;
    border-radius: 4px;
    color: white;
  }
  .gr .btn {
    margin: 0 8px;
  }
</style>
</head>
<body>
    <div class="container1">
        <div class="order">
          <div class="title">
            <h1>Contact US</h1>
          </div>
          <table>
            <tr>
              <th class="bld">Name:</th>
              <th class="val">{{ $name }}</th>
            </tr>
      
            <tr>
              <td class="bld">Email:</td>
              <td class="val">{{ $email }}</td>
            </tr>
            
            <tr>
              <td class="bld">Message:</td>
              <td class="val">{{ $messages }}</td>
            </tr>
          </table>
        </div>
      </div>
</body>
</html>