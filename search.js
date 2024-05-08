var searchData = [
{
  "filename": "Vorschau/index.html",
  "title": "Vorschau",
  "text": " Vorschau der Webseite Links sehen Sie die Projekt\u0026uuml;bersicht. Kurzbeschreibung ausf\u0026uuml;hrliche Infos sind im Programm und den Hilfe-Dateien "
},
{
  "filename": "Vorschau/Einfuehrung/index.html",
  "title": "Einf\u00FChrung",
  "text": " Einf\u0026uuml;hrung Kurz-Beschreibung Das Programm Sparkontenverwaltung ist f\u0026uuml;r Windows-Betriebssysteme konzipiert und erm\u0026ouml;glicht die Verwaltung von Sparkonten f\u0026uuml;r mehrere Mandanten. Sie k\u0026ouml;nnen mit dem Programm Buchungen erfassen, die den jeweiligen Konten zugeordnet werden. Nach der Erfassung f\u0026uuml;hrt das Programm einen Tagesabschluss durch, in dem die Voraus-Zinsen f\u0026uuml;r die Konten berechnet werden. Das Programm bietet Ihnen eine \u0026uuml;bersichtliche und benutzerfreundliche Oberfl\u0026auml;che, mit der Sie alle Funktionen einfach und schnell ausf\u0026uuml;hren k\u0026ouml;nnen. Mit dem Programm Sparkontenverwaltung haben Sie Ihre Sparkonten immer im Blick und k\u0026ouml;nnen sie optimal verwalten. Tabelleninfos.pdf "
},
{
  "filename": "Vorschau/Modul_Buchungen/index.html",
  "title": "Modul Buchungen",
  "text": " Modul Buchungen Link zur Beschreibung Schaubild "
},
{
  "filename": "Vorschau/Modul_Tagesabschluss/index.html",
  "title": "Modul Tagesabschluss",
  "text": " Maske Tagesabschluss Tagesab.drawio.pdf Tagesabschluss.pdf Tagesabschlusskifueber.pdf "
},
{
  "filename": "Vorschau/Module_Datensicherung/index.html",
  "title": "Module Datensicherung",
  "text": " Modul Datensicherung "
},
{
  "filename": "Vorschau/Modul_Jahresabschluss/index.html",
  "title": "Modul Jahresabschluss",
  "text": " Modul Jahresabschluss "
},
{
  "filename": "Vorschau/Modul_Archivierung/index.html",
  "title": "Modul Archivierung",
  "text": " Modul Archivierung "
},
{
  "filename": "Vorschau/Module_Konten/index.html",
  "title": "Module Konten",
  "text": " Module Konten "
},
{
  "filename": "Vorschau/Modul_Inhaber/index.html",
  "title": "Modul Inhaber",
  "text": " Modul Inhaber "
},
{
  "filename": "Vorschau/Modul_Auskunftbuch/index.html",
  "title": "Modul Auskunftbuch",
  "text": " Modul Auskunft Buchungen "
},
{
  "filename": "Vorschau/Druckausgaben/index.html",
  "title": "Druckausgaben",
  "text": " Druckausgaben "
},
{
  "filename": "Vorschau/Chefansicht/index.html",
  "title": "Chefansicht",
  "text": " Chefansicht "
},
{
  "filename": "Vorschau/Sonderprogramme/index.html",
  "title": "Sonderprogramme",
  "text": " Sonderprogramme "
},
{
  "filename": "Vorschau/Doppik_und_Fusionen/index.html",
  "title": "Doppik und Fusionen",
  "text": " Doppik und Fusionen "
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