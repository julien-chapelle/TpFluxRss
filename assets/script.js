$(function () {

    var cookie = document.cookie;
    var cookieSplit = document.cookie.split(';');
    var selectTheme = cookieSplit[0];
    var selectThemeSplit = selectTheme.split('=');
    var selectThemeChoice = selectThemeSplit[1];

    if (selectThemeChoice == 'blackButton') {

        $('#blackButton').html(function () { //Au clic du bouton #blackButton
            $('#fluxButton').css('background-color', '#000'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#000'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#353535'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#000',
                'color': 'white'
            });
            $('#colorNav').css('background-color', '#e9f1f7'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#000',
                'color': 'white'
            });
            $('.card-header').css({
                'background-color': 'white',
                'color': '#000'
            });
            $('.card-title').css({
                'color': 'white'
            });
        });
    } else if (selectThemeChoice == 'blueButton') {

        $('#blueButton').html(function () { //Au clic du bouton #blueButton
            $('#fluxButton').css('background-color', '#0045c5'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#0045c5'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#086788'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#0045c5',
                'color': 'white'
            }); //Alors tu change la couleur de fond du header et la couleur de la police
            $('#colorNav').css('background-color', '#f0c808'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#0045c5',
                'color': '#f0c808'
            });
            $('.card-header').css({
                'background-color': 'white',
                'color': '#280000'
            });
            $('.card-title').css({
                'color': '#280000'
            });
        });
    } else if (selectThemeChoice == 'redButton') {

        $('#redButton').html(function () { //Au clic du bouton #redButton
            $('#fluxButton').css('background-color', '#280000'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#280000'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#280000'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#ba0000',
                'color': 'white'
            }); //Alors tu change la couleur de fond du header et la couleur de la police
            $('#colorNav').css('background-color', '#fdffff'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#cfdee7',
                'color': '#280000'
            });
            $('.card-header').css({
                'color': '#280000'
            });
            $('.card-title').css({
                'color': '#280000'
            });
        });

    } else {
        $('#blackButton').click(function () { //Au clic du bouton #blackButton
            $('#fluxButton').css('background-color', '#000'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#000'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#000'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#000',
                'color': 'white',
            });
            $('#colorNav').css('background-color', '#e9f1f7'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#000',
                'color': '#ffffff',
                'border': 'solid 1px white'
            });
            $('.card-header').css({
                'color': 'white'
            });
            $('.card-title').css({
                'color': 'white'
            });
        });
        $('#blueButton').click(function () { //Au clic du bouton #blueButton
            $('#fluxButton').css('background-color', '#0045c5'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#0045c5'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#086788'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#0045c5',
                'color': 'white'
            }); //Alors tu change la couleur de fond du header et la couleur de la police
            $('#colorNav').css('background-color', '#f0c808'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#0045c5',
                'color': '#f0c808'
            });
            $('.card-header').css({
                'color': '#280000'
            });
            $('.card-title').css({
                'color': '#280000'
            });
        });
        $('#redButton').click(function () { //Au clic du bouton #redButton
            $('#fluxButton').css('background-color', '#280000'); //Alors tu change la couleur de fond du #fluxButton
            $('#colorButton').css('background-color', '#280000'); //Alors tu change la couleur de fond du #colorButton
            $('#colorBody').css('background-color', '#280000'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#ba0000',
                'color': 'white'
            }); //Alors tu change la couleur de fond du header et la couleur de la police
            $('#colorNav').css('background-color', '#fdffff'); //Alors tu change la couleur de fond de la navBar
            $('.cardColor').css({
                'background-color': '#cfdee7',
                'color': '#280000'
            });
            $('.card-header').css({
                'color': '#280000'
            });
            $('.card-title').css({
                'color': '#280000'
            });
        });
    };

});