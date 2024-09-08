<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 flex justify-center flex-col items-center">
    


<div class="login w-[500px] p-8 my-10 shadow-lg bg-white rounded-xl">
    <form class="flex flex-col gap-4" action="./home.php" method="POST">
    <div class="field" >
        <label for="">Name</label>
        <input type="text" class="p-3 border w-full rounded" name="name">
    </div>
    <div class="field">
        <label for="">Email</label>
        <input type="text" class="p-3 border w-full rounded" name="email">
    </div>
    <div class="field">
        <label for="">Phone</label>
        <input type="text" class="p-3 border w-full rounded" name="phone">
    </div>
    <div class="field">
        <button class="w-28 bg-blue-300 p-3 rounded">Submit</button>
    </div>
    </form>
</div>

<div class="login w-[500px] p-8 mb-10 shadow-lg bg-white rounded-xl">
    <form class="flex flex-col gap-4" action="./login.php" method="POST">
    <div class="field" >
        <label for="">Name</label>
        <input type="text" class="p-3 border w-full rounded" name="name">
    </div>
    <div class="field">
        <label for="">Email</label>
        <input type="text" class="p-3 border w-full rounded" name="email">
    </div>
    <div class="field">
        <label for="">Phone</label>
        <input type="text" class="p-3 border w-full rounded" name="phone">
    </div>
    <div class="field">
        <button class="w-28 bg-blue-300 p-3 rounded">Submit</button>
    </div>
    </form>
</div>


</body>
</html>