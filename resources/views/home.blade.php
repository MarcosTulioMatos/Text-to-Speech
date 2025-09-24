<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="{{ asset('volume.png') }}">
    <meta charset="utf-8">
    <title>Conversor de Texto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #a5a5a5ff;
        }
        
        .container {    
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        textarea {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            resize: vertical;
            margin-bottom: 20px;
        }
        
        button {
            width: 100%;
            padding: 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background: #0056b3;
        }
        
        .audio-container {
            margin-top: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 5px;
            display: none;
        }
        
        audio {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversor de Texto para Voz</h1>
        
        <form action="/" method="POST">
            @csrf
            <textarea name="text" rows="6" placeholder="Digite seu texto aqui..." required>{{ $text ?? '' }}</textarea>
            <button type="submit">Gerar Áudio</button>
        </form>
        
        @if(isset($audioUrl))
        <div class="audio-container" style="display: block;">
            <strong>Áudio Gerado:</strong>
            <audio controls>
                <source src="{{ $audioUrl }}" type="audio/mpeg">
                Seu navegador não suporta áudio.
            </audio>
        </div>
        @endif
    </div>
</body>
</html>