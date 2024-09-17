var domainroot = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/";

function Gsitesearch(curobj) {
  curobj.q.value = "site:" + domainroot + " " + curobj.qfront.value;
}
