# dependency-inversion

![Untitled](https://github.com/DeGraciaMathieu/dependency-inversion/assets/11473997/2ca454fb-30ca-4abb-8cf1-29deac161463)

- Component A is not aware of the existence or constraints of Component B.
- Component A is not dependent on Component B; it is interchangeable.
- A modification to Component B will not disrupt Component A because it must adhere to an interface.
- DatabaseContract serves as an **anti-corruption** model because it protects its component from the outside.
- The Service **uses** DatabaseContract because it is in the same layer.
- MysqlDatabase **implements** DatabaseContract because it is in a remote layer.
