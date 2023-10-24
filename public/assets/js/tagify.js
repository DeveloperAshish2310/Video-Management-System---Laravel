var input = document.querySelector('input[name="tags"]');

var whitelist = ["Entertainment","MyFlix","Netflix","Amazon Prime Videos","Youtube","Ashish","Movies","Shows","Anime"];

var tagify = new Tagify(input, {
    whitelist: whitelist,
    maxTags: 20,
    dropdown: {
        maxItems: 20,
        classname: "tags-look",
        enabled: 0,
        closeOnSelect: false
    }
})