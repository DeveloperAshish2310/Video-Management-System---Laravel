<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thumbnail Generator</title>
</head>
<body>
    <form action="/generate-thumbnail" method="post">
        @csrf
        <label for="url">Image URL:</label>
        <input type="text" name="url" id="url" required value="https://image.tmdb.org/t/p/original/dB6Krk806zeqd0YNp2ngQ9zXteH.jpg">
        <button type="submit">Generate Thumbnail</button>
    </form>

    <div id="thumbnail-container"></div>

    <script>
        document.querySelector('form').addEventListener('submit', async function (event) {
            event.preventDefault();

            const url = document.getElementById('url').value;

            try {
                const response = await fetch('/developer/generate-thumbnail', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ url: url }),
                });

                const data = await response.json();
                
                // Display the thumbnail
                const thumbnailContainer = document.getElementById('thumbnail-container');
                thumbnailContainer.innerHTML = `<img src="${data.thumbnail_url.encoded}" alt="Thumbnail">`;
            } catch (error) {
                console.error('Error:', error);
            }
        });
    </script>
</body>
</html>
