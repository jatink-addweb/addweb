var queryableFunctions = {
    getDifference: function(nMinuend, nSubtrahend) {
        reply('printStuff', nMinuend - nSubtrahend);
    },
    waitSomeTime: function() {
        setTimeout(function() { reply('doAlert', 3, 'seconds'); }, 3000);
    }
  };

  
  function defaultReply(message) {

  }
  
  function reply() {
    if (arguments.length < 1) { throw new TypeError('reply - not enough arguments'); return; }
    postMessage({ 'queryMethodListener': arguments[0], 'queryMethodArguments': Array.prototype.slice.call(arguments, 1) });
  }
  
  onmessage = function(oEvent) {
    if (oEvent.data instanceof Object && oEvent.data.hasOwnProperty('queryMethod') && oEvent.data.hasOwnProperty('queryMethodArguments')) {
      queryableFunctions[oEvent.data.queryMethod].apply(self, oEvent.data.queryMethodArguments);
    } else {
      defaultReply(oEvent.data);
    }
  };
  