<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Style w JavaScript</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div class="left">

        <h1>Konfigurator stylu</h1>

        <p>Podaj kolor tła</p>
        <button id="indigo">Indigo</button>
        <button id="steelblue">Steelblue</button>
        <button id="olive">Olive</button>

        <p>Podaj kolor czcionki</p>
        <select id="fontColor">
            <option value="white">White</option>
            <option value="tan">Tan</option>
            <option value="bisque">Bisque</option>
            <option value="plum">Plum</option>
        </select>

        <p>Podaj rozmiar czcionki w procentach, np. 200%</p>
        <input type="text" id="fontSize" value="100%">

        <p>Czy rysunek ma mieć ramkę?</p>
        <input type="checkbox" id="hasBorder" checked>
        <label for="hasBorder">Rysuj ramkę</label>

        <p>Jaki jest typ punktora listy?</p>
        <input type="radio" name="listStyle" id="disc" checked class="radio">
        <label for="disc">dysk</label> <br>

        <input type="radio" name="listStyle" id="square" class="radio">   
        <label for="square">kwadrat</label> <br>

        <input type="radio" name="listStyle" id="circle" class="radio">
        <label for="circle">okrąg</label>

    </div>
    <div class="right">
        <img src="gibraltar.jpg" alt="półwysep Gibraltar">

        <ul>
            <li>element 1</li>
            <li>element 2</li>
            <li>element 3</li>
        </ul>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

    </div>
    <div class="footer">
        Autor: PESEL
    </div>

    <script>

        const btns = document.querySelectorAll('button')
        const fontColor = document.querySelector('#fontColor')
        const fontSize = document.querySelector('#fontSize')
        const hasBorder = document.querySelector('#hasBorder')
        const radios = document.querySelectorAll('.radio')
        
        const right = document.querySelector('.right')
        const img = document.querySelector('img')
        const ul = document.querySelector('ul')

        // console.log(right.style);

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                right.style.backgroundColor = btn.id;
            })
        })

        fontColor.addEventListener('change', () => {
            right.style.color = fontColor.value
        })

        fontSize.addEventListener('change', () => {
            right.style.fontSize = fontSize.value
        })

        hasBorder.addEventListener('change', () => {
            if(hasBorder.checked) img.style.border = '1px solid white'
            else img.style.border = 'none'
        })

        radios.forEach(radio => {
            radio.addEventListener('change', () => {
                if(radio.checked) ul.style.listStyle = radio.id
            })
        })

    </script>

</body>
</html>