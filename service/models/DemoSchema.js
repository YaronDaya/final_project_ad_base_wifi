var mongoose = require('mongoose');

// Document Structure Schema
var UserShema = new mongoose.Schema({
  id: mongoose.Schema.Types.ObjectId,
  fist_name: {type:String,trim:true},
  last_name: {type:String,trim:true},
  password: {type:String,required:true},
  email: {  type: String,
    required: true,
    unique: true,
    lowercase: true,
    validate: (value) => {
      return validator.isEmail(value)
    },
  birthday: {type:Date},
})

//check password function
UserSchema.pre('save', function(next) {
    var user = this;

    // only hash the password if it has been modified (or is new)
    if (!user.isModified('password')) return next();

    // generate a salt
    bcrypt.genSalt(SALT_WORK_FACTOR, function(err, salt) {
        if (err) return next(err);

        // hash the password using our new salt
        bcrypt.hash(user.password, salt, function(err, hash) {
            if (err) return next(err);

            // override the cleartext password with the hashed one
            user.password = hash;
            next();
        });
    });
});

UserSchema.methods.comparePassword = function(candidatePassword, cb) {
    bcrypt.compare(candidatePassword, this.password, function(err, isMatch) {
        if (err) return cb(err);
        cb(null, isMatch);
    });
};


module.exports = mongoose.model("UserShema",UserShema, "Demo");
