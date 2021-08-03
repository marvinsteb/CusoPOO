function Account(name, document, email, password) {
  this.id;
  this.name = name;
  this.document = document;
  this.email = email;
  this.password = password;
}

Account.prototype.printDataAccount = function () {
  console.log(
    `\tName: ${this.name} \n\tDocument: ${this.document}\n\tEmail: ${this.email}\n\tPassword ${this.password}`
  );
};
