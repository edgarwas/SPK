var searchData = [
{
  "filename": "Bearbeiten/index.html",
  "title": "Bearbeiten",
  "text": "Formatierungen mit Markdown Mit Markdown erstellen Sie die Artikel und k\u00F6nnen sich auf den Inhalt konzentrieren. So wird eine \u00DCberschrift z.B. so erzeugt: # \u00DCberschrift Ebene 1 Eine \u00DCberschrfit auf Ebene 2 wird so erzeugt: ## \u00DCberschrift Ebene 2 Dieser Text wird fett und dieser hier kursiv. Bilder k\u00F6nnen einfach \u00FCber die Zwischenablage oder \u00FCber die Dateiverwaltung eingef\u00FCgt werden: Bleiben Sie auf dem Bildlink und Sie erhalten eine Vorschau. Eine \u00DCbersicht \u00FCber die komplette Syntax finden Sie in der Hilfe. HTML-Code einf\u00FCgen Sie k\u00F6nnen jederzeit auch HTML-Code verwenden. Markdown und HTML k\u00F6nnen gemixt werden. "
},
{
  "filename": "Upload/index.html",
  "title": "Upload",
  "text": "FTP-Upload Mit dem FTP-Upload laden Sie den HTML-Export nach \u0026Auml;nderungen bequem auf Ihren Webspace. Es werden nur neue und ge\u0026auml;nderte Dateien aktualisiert. Einfach den FTP-Upload starten, den Rest erledigt \u0022DA-HelpCreator\u0022 f\u0026uuml;r Sie. "
},
{
  "filename": "Vorschau/index.html",
  "title": "Vorschau",
  "text": "Vorschau Wechseln Sie jederzeit in die Vorschau. Die Seitenvorschau in diesem Editor erreichen Sie \u0026uuml;ber den Reiter am Ende: Mit dieser Vorschau, sehen Sie eine Voransicht der Formatierungen f\u0026uuml;r die aktuelle Seite. Vorschau der Webseite Es gibt verschiedene Vorschaufunktionen. In der Toolbar k\u0026ouml;nnen Sie die Vorschau der kompletten Seite anzeigen lassen: Damit k\u0026ouml;nnen Sie sehen, wie die komplette Projekt aussieht. "
},
{
  "filename": "Vorschau/Unterordner/index.html",
  "title": "Unterordner",
  "text": "Unterordner Seiten und Ordner k\u0026ouml;nnen beliebig viele Unterordner enthalten. Erstellen Sie komplexe Webseiten. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. "
},
];

function getRelativePath(relativePath) {
    var element = document.getElementById('search');
    var searchPath = element.dataset.searchpath;
    var absolutePath = searchPath + relativePath;
    return absolutePath;
}
// Get the search field and results div
var searchField = document.getElementById('search');
var resultsDiv = document.getElementById('searchResults');

// Add event listener to the search field
searchField.addEventListener('keyup', function () {
    // Get search term and make it lowercase
    var searchTerm = searchField.value.toLowerCase();

    // Split the search term into words and filter out empty strings and single characters
    var searchWords = searchTerm.split(',').filter(function (word) {
        return word.length > 2;
    });

    // Clear the results div
    resultsDiv.innerHTML = '';

    // Create a new button element
    var closeButton = document.createElement('button');
    // Change the button text to 'x'
    closeButton.innerHTML = 'x';

    // Add a class to the button for styling (optional)
    closeButton.className = 'close-button';

    // Add an event listener to the button to handle the click event
    closeButton.addEventListener('click', function () {
        // Clear the div's content when the button is clicked
        resultsDiv.innerHTML = '';
        resultsDiv.style.display = 'none';
    });

    // If the search term is empty or only whitespace, stop here
    if (!searchTerm.trim()) {
        resultsDiv.style.display = 'none';
        return;
    }

    // Filter the data
    var results = searchData.filter(file => {
        // Check if all words appear in the title or text
        return searchWords.every(word =>
            file.title.toLowerCase().includes(word) ||
            file.text.toLowerCase().includes(word)
        );
    });

    // Create an unordered list
    var resultList = document.createElement('ul');

    // Add each result to the results list
    results.forEach(result => {
        // Create a list item and a link for each result
        var resultItem = document.createElement('li');
        var resultLink = document.createElement('a');
        resultLink.textContent = result.title;
        resultLink.href = getRelativePath(result.filename);

        // Add the link to the list item
        resultItem.appendChild(resultLink);

        // Highlight all occurrences of the search terms in the text, without requiring full word matches
        var fullText = result.text;
        var snippets = [];

        // Function to find and process all occurrences of the search terms
        searchWords.forEach(word => {
            var re = new RegExp(`(\\S*\\s)?(\\S*\\s)?(\\S*\\s)?(\\S*\\s)?(\\S*\\s)?${word}(\\s\\S*)?(\\s\\S*)?(\\s\\S*)?(\\s\\S*)?(\\s\\S*)?`, 'gi');
            fullText = fullText.replace(re, function (match, ...groups) {
                var snippet = match;
                var prefix = groups.slice(0, 5).join('');
                var suffix = groups.slice(5, 10).join('');
                var matchIndex = match.toLowerCase().indexOf(word.toLowerCase());
                var startIndex = Math.max(fullText.indexOf(match) - prefix.length, 0);
                var endIndex = fullText.indexOf(match) + matchIndex + word.length + suffix.length;

                // Check if the start and end of the snippet are not the start or end of the full text
                var prefixEllipsis = startIndex > 0 ? "..." : "";
                var suffixEllipsis = endIndex < fullText.length ? "..." : "";

                snippet = prefixEllipsis + prefix + '<mark>' + match.substr(matchIndex, word.length) + '</mark>' + suffix + suffixEllipsis;

                // Avoid duplicate snippets
                if (!snippets.includes(snippet)) {
                    snippets.push(snippet);
                }

                // Return the original match with the search term highlighted, not altering the surrounding text
                return match.substr(0, matchIndex) + '<mark>' + match.substr(matchIndex, word.length) + '</mark>' + match.substr(matchIndex + word.length);
            });
        });

        // Combine all unique snippets into the highlightedText
        var highlightedText = snippets.join(' ');

        // Create a paragraph for the context and add it to the list item
        var contextParagraph = document.createElement('p');
        contextParagraph.innerHTML = highlightedText;
        resultItem.appendChild(contextParagraph);

        // Add the list item to the list
        resultList.appendChild(resultItem);
    });

    // Add the results list to the results div
    resultsDiv.appendChild(resultList);

    // Append the button to the div
    resultsDiv.appendChild(closeButton);

    // If there are no results, hide the results div and stop here
    if (results.length === 0) {
        resultsDiv.style.display = 'none';
        return;
    }

    // Show the results div
    resultsDiv.style.display = 'block';
});