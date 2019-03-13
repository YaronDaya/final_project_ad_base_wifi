const express = require('express'),
      router = express.Router(),
      bodyParser = require('body-parser');
var Demo = require('../models/DemoSchema');

router.use(bodyParser.json());
router.use(bodyParser.urlencoded({ extended: true }));

// GET PUT POST DELETE ...

router.post('/createUser', (req, res) => {
  const newUser = new Demo(req.body);
  newUser.save( err => {
    if (err)
      return res.status(500).send({ "Message": "Internal server error" });
    res.status(200).send(`Acount ${req.body.name} has been created successfully`);
  })
});

// router.get
// router.put .....

// SEE Documentation of MONGOOSE NPM


module.exports = router;
