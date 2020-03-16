$(function () {
    

    var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });

    // Initialize ajax autocomplete:
    $('#medic').autocomplete({
        // serviceUrl: '/autosuggest/service/url',
        lookup: countriesArray,
        lookupFilter: function(suggestion, originalQuery, queryLowerCase) {
            var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');
            return re.test(suggestion.value);
        }
    });

});