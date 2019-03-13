var express = require('express'),
    app = express(),
    bodyParser = require('body-parser'),
    db = require('./database')
    DemoController = require('./controllers/DemoController'),
    port = process.env.PORT || 3000;

  // app.set('port', port);

// To Prevent CORS ORIGIN Blocking
app.use((req, res, next) => {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type,Accept");
  next();
});

// Redirect all the requests with http://localhost:3000/api/SOMETHING TO DemoController
app.use('/api', DemoController);

// Catching all not founded pages
app.all('*', (req, res, next) => {
  res.status(404).send({"Message": `Hello MY  Name Is Yaron, And this page is not found`});
});

// Open localhost and listening to port
app.listen(port, () => {
  console.log(`Listening on port ${port}`);
});
