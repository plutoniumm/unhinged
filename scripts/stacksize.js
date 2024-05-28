function stackLen () {
  let stack = 0;

  const self = () => {
    stack++;
    self();
  };

  try {
    self();
  } catch ( e ) {
    // do nothing
  };
  return stack;
};

// people who write code like this are why flying cars aren't yet here
console.log( `Stack size: ${ stackLen() }` );