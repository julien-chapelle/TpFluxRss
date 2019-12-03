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
            $('#colorBody').css('background-color', '#000'); //Alors tu change la couleur de fond du body
            $('#colorHeader').css({
                'background-color': '#000',
                'color': '#ffffff',
            });
            $('#colorNav').css('background-color', '#000'); //Alors tu change la couleur de fond de la navBar
            $('.navbar-toggler').css('color', '#ffffff'); //couleur logo burger en mode smartphone
            $('.nav-link').css('color', '#ffffff');
            $('.buttonStyle1').css({
                'color': '#ffffff',
                'background-color': '#000',
                'border': 'solid 1px #d2d7df'
            });
            $('.buttonStyle2').css({
                'color': '#000',
                'background-color': '#ffffff',
                'border': 'solid 1px #000'
            });
            $('.cardColor').css({
                'background-color': '#000',
                'color': '#ffffff',
                'border': 'solid 1px #d2d7df'
            });
            $('.card-header').css({
                'color': '#f46300',
                'background-color': '#353535',
            });
            $('.card-title').css({
                'color': '#ffffff'
            });
            $('.modal-header').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.modal-title').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.modal-description').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.cardSubject').css({
                'background-color': '#000',
                'color': '#ffffff',
                'border': 'solid 1px #d2d7df'
            });
            $('.fa-caret-square-up').css({
                'color': '#f46300',
                'opacity': '0.7'
            });
            $('.colorHref').css('color', '#f46300');
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
                'color': '#ffffff',
            });
            $('#colorNav').css('background-color', '#000'); //Alors tu change la couleur de fond de la navBar
            $('.navbar-toggler').css('color', '#ffffff'); //couleur logo burger en mode smartphone
            $('.nav-link').css('color', '#ffffff');
            $('.buttonStyle1').css({
                'color': '#ffffff',
                'background-color': '#000',
                'border': 'solid 1px #d2d7df'
            });
            $('.buttonStyle2').css({
                'color': '#000',
                'background-color': '#ffffff',
                'border': 'solid 1px #000'
            });
            $('.cardColor').css({
                'background-color': '#000',
                'color': '#ffffff',
                'border': 'solid 1px #d2d7df'
            });
            $('.card-header').css({
                'color': '#f46300',
                'background-color': '#353535',
            });
            $('.card-title').css({
                'color': '#ffffff'
            });
            $('.modal-header').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.modal-title').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.modal-description').css({
                'background-color': '#ffffff',
                'color': '#000',
            });
            $('.cardSubject').css({
                'background-color': '#000',
                'color': '#ffffff',
                'border': 'solid 1px #d2d7df'
            });
            $('.fa-caret-square-up').css({
                'color': '#f46300',
                'opacity': '0.7'
            });
            $('.colorHref').css('color', '#f46300');
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