$(function () {
    if (typeof ko != 'undefined') {
        var viewModel = {};
        viewModel.fileData = ko.observable({
            dataURL: ko.observable(),
            // base64String: ko.observable(),
        });
        viewModel.multiFileData = ko.observable({
            dataURLArray: ko.observableArray(),
        });
        viewModel.onClear = function (fileData) {
            if (confirm('Are you sure?')) {
                fileData.clear && fileData.clear();
            }
        };
        viewModel.debug = function () {
            window.viewModel = viewModel;
            console.log(ko.toJSON(viewModel));
            debugger;
        };
        ko.applyBindings(viewModel);
    }
});