<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="{{asset('css/addstyle.css')}}">
    </head>
    <body>


    
    

    <section>
    <div class="container">
        <div class="upload-section">
            <div class="upload-box">
                <span class="plus-sign">+</span>
            </div>
            <p class="upload-text">Kitob sarlavhasini qo'shing</p>
        </div>
        <div class="form-section">
            <form action="#">
                <div class="label-input">
                    <label for="book-name">Kitob nomi:</label>
                    <input type="text" id="book-name">

                    <label for="author">Kitob muallifi:</label>
                    <input type="text" id="author">

                    <label for="genre">Kitob janri:</label>
                    <input type="text" id="genre">

                    <label for="year">Yili:</label>
                    <input type="text" id="year">
                </div>
                <div class="file-upload">
                    <label for="file">Faylni tanlang</label>
                    <input type="file" id="file">

                    <button type="submit" class="add-book-button">Qo'shish</button>
                </div>
            </form>
        </div>
    </div>

    <section>
    </body>
    </html>
    </x-app-layout>