require('./bootstrap');
app.use('/jquery', express.static(__dirname + '/node_modules/jquery/dist/'));
app.use('/jquery-ui', express.static(__dirname + '/node_modules/jquery-ui/build/'));