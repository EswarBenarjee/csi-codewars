function GeonTheGenerator(length = 20) {
  let randomString = "";

  characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (let i = 0; i < length; i++) {
    randomString +=
      characters[Math.floor(Math.random() * (characters.length - 1))];
  }

  return randomString;
}

function generateUser(user) {
  let link = "https://api.multiavatar.com/";
  let username = GeonTheGenerator();
  let avatar = link + username + ".png?apikey=yBoYaxDPm5GuAl";
  user.src = avatar;
}
let user1 = document.getElementById("user1");
let user2 = document.getElementById("user2");
generateUser(user1);
