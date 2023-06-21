<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php
       
    ?>    
</head>
<body>
    <div class="container p-5">
        <div class="row mb-5">
            <div class="col text-center">
                <h2>Strong password generator</h2>
                <h4>Genera una password sicura</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Inizio form -->
                <form>
                    <div class="row row-cols mb-3">
                        <div class="col">
                            <label for="inputPassword3" class="col-form-label">Lunghezza password:</label>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="row row-cols-2 mb-3 ">
                        <legend class="col-form-label col pt-0">consenti ripetizioni di uno o più caratteri:</legend>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="si" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Sì
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="no" checked>
                                <label class="form-check-label" for="gridRadios2">
                                    No
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="gridCheck" value="lettere">
                                <label class="form-check-label" for="gridCheck1">
                                    Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck2" name="gridCheck" value="numeri">
                                <label class="form-check-label" for="gridCheck2">
                                    Numeri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck3" name="gridCheck" value="simboli">
                                <label class="form-check-label" for="gridCheck3">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="submit" class="btn btn-secondary">Annulla</button>
                </form>
                <!-- Fine form -->
            </div>
        </div>
    </div>
</body>
</html>