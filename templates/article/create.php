<form action="../article/store" method="post">
    <input placeholder="Автор" class="input" tupe="text" name="title" id="">
    <input placeholder="Сообщение" class="input" tupe="text" name="text" id="">
    <select name="author" id="">
        <?php foreach ($users as $user): ?>
            <option value="<?= $user->getId(); ?>"><?= $user->getNickname(); ?></option>
        <?php endforeach; ?>
    </select>
    <button class="btn" type="submit">Опубликовать</button>
    <style>
        .input {
            background-color: #212121;
            max-width: 190px;
            height: 40px;
            padding: 10px;
            text-align: center;
            border: 2px solid white;
            border-radius: 5px;
            box-shadow: 3px 3px 2px rgb(249, 255, 85);
        }

        .input:focus {
            color: rgb(0, 255, 255);
            background-color: #212121;
            outline-color: rgb(0, 255, 255);
            box-shadow: -3px -3px 15px rgb(0, 255, 255);
            transition: .1s;
            transition-property: box-shadow;
        }

        form {
            max-width: 10rem;
            display: grid;
            gap: 1rem;
            margin-left: 43%;
            margin-top: 15%;
        }

        .btn {
            width: 8em;
            height: 2.3em;
            margin: 0.5em;
            background: black;
            color: white;
            border: none;
            border-radius: 0.625em;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        button:hover {
            color: black;
        }

        button:after {
            content: "";
            background: white;
            position: absolute;
            z-index: -1;
            left: -20%;
            right: -20%;
            top: 0;
            bottom: 0;
            transform: skewX(-45deg) scale(0, 1);
            transition: all 0.5s;
        }

        button:hover:after {
            transform: skewX(-45deg) scale(1, 1);
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
        }

        body {
            background: linear-gradient(90deg, #282f45,#040c25);
        }


        select {
            margin: 12px;
            height: 50px;
            width: 120px;
            border-radius: 10px;
            background: #333;
            justify-content: center;
            align-items: center;
            box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #444, inset -5px -5px 10px #222;
            font-family: 'Damion', cursive;
            border: none;
            font-size: 16px;
            color: rgb(161, 161, 161);
            transition: 500ms;
            margin-left: 2rem;
        }
    </style>
</form>