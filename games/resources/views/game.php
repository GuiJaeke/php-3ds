<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top one of brazil nextage</title>
    <style>
        body {
            background-image: url('https://scontent-gru2-1.xx.fbcdn.net/v/t39.30808-6/310328361_510363844432362_2226164489983065472_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=gDNLgfpmNPQQ7kNvgHZ9JDj&_nc_oc=Adgmtn67_kHF6Zwn37LJhlRmIxFFWPLSnzHowzy96xaCuFEH9Fff2RpQGGDAiFiKD3Q&_nc_zt=23&_nc_ht=scontent-gru2-1.xx&_nc_gid=ADIhtOZMOaI8lcG7_TDTzOX&oh=00_AYDjiltIeo_nXqFVkHXIFRI9vcLmZV6B-NI0ga3c_h35rw&oe=67BEF163');
            background-color: rgb(0, 50, 140);
        }

        .quad {
            background-color: rgb(0, 20, 180, 0.500);
            margin: 10px 200px;
            border-radius: 10px;
            height: 100em;
            padding: 20px;
            border: solid 2px rgb(255, 255, 255);
            overflow: hidden
        }
        .quad {
            background-color: #f4f4f9;
            border-radius: 8px;
            padding: 20px;
            max-width: 400px;
            margin: 50px auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="number"],
        select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            outline: none;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #6C63FF;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.6);
        }
        button {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #6C63FF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #574bde;
        }
        button:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="quad">
        <form action="" method="post">
            <label for="game-name">Qual o nome do seu jogo foda?</label>
            <input type="text" id="game-name" name="game_name" placeholder="Nome do jogo">

            <label for="game-hours">Quantas horas você passou no seu jogo foda?</label>
            <input type="number" id="game-hours" name="game_hours" placeholder="Horas jogadas">

            <label for="recommendation">Você recomenda seu jogo foda?</label>
            <input type="text" id="recommendation" name="recommendation" placeholder="Sim ou Não">

            <label for="game-rating">Qual a nota do seu jogo foda?</label>
            <select name="game_rating" id="game-rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>

</html>