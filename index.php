<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <div id="app">
            <h1>To do list</h1>
            <section>
                <ul>
                    <li>

                    </li>
                </ul>
            </section>
            <form action="" method="GET">
                <label for="newTask">
                    Inserisci una nuova task
                </label>
                <input type="text" id="newTask" v-model="toDoTask">
                <button type="submit">
                    Aggiungi task
                </button>
            </form>
        </div>
        <script src="./js/script.js"></script>

    </body>
</html>