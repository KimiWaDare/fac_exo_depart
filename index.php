<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OhMyCats</title>
        <link rel="stylesheet" type="text/css" href="./css/css.css">
    </head>
    <body>
        <header>
            <h1>OhMyCats!</h1>
            <div>
                <h2>Adoptez un chat trop bon !</h2>
            </div>
        </header>
        <main>
            <section id="chat">
                <aside>
                    <form>
                        <h2>Les chats à adopter</h2>
                        <div id="choixChat">
                            <h3> choix du chat : </h3>
                            <select name="lstchat" size="1">
                                <option>-- Sélectionnez --</option>
                                <option>-- Sélectionnez --</option>
                                <option>-- Sélectionnez --</option>
                                <option>-- Sélectionnez --</option>
                                <option>-- Sélectionnez --</option>
                            </select>
                            <h3> Raison d'adoption : </h3>
                            <textarea name='ArgChat' rows='15' cols='30' placeholder='Saissiez ici les raisons pour lesquelles vous souhaitez adoptez ce chat...'></textarea>
                            <br>
                            <input type='submit' value='Envoyez'>
                        </div>
                    </form>
                </aside>
                <div>
                    <img class="imgChat" src="./Images/chat.jpg">
                </div>
            </section>
            <section id="adopter">
                <h1>Nos chats à adopter...</h1>            
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non nibh semper, blandit mauris eu, malesuada erat. Donec condimentum ante vel hendrerit fringilla. Aliquam commodo, felis vitae accumsan convallis, lorem libero tristique tortor, 
                    id interdum massa nulla a augue. Phasellus vitae nibh pharetra, auctor velit vitae, vestibulum est. Mauris quis sodales nunc, sit amet tristique arcu. Curabitur cursus diam vel vulputate finibus. Aliquam eu egestas diam. In hac habitasse platea dictumst. 
                </p>
                <img class="teteChat" src="./Images/tete-chat.png">
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>
