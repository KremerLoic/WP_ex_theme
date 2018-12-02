


class WebDeveloper {
    constructor(name, age, skills) {
        this._name = name;
        this._age = age;
        this._skills = skills;
    }
    get name() {
        return this.name();
    }
    get age() {
        return this.age();
    }
    get skills() {
        return this.skills();
    }
}
function introduceMyself() {
    const loic = new WebDeveloper('Kremer Loic', '25', ['Javascript', 'PHP', 'HTML', 'CSS']);
    console.log(" Hello World, my name is " + loic._name + " i\'m " + loic._age + " and i\'m a Junior WebDeveloper " +
        "in " + loic._skills + " currently looking for an internship  ! Feel free to contact me 🙂");
}
introduceMyself();