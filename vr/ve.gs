function doGet(e) {
  
    return HtmlService.createTemplateFromFile("vr").evaluate();
}

function userClicked(userInput){
var url ="https://docs.google.com/spreadsheets/d/1xcjg8yViedWRpIS8TI_z-Iyg6s5TgLxmLIOr17r-y3g/edit#gid=0";
var ss = SpreadsheetApp.openByUrl(url);
var ws =ss.getSheetByName("data");
ws.appendRow([userInput.Fn,userInput.Name,userInput.Nickname,new Date()]);

  
//Logger.log(name+"Someone Clicked the Button");

}
function include(filename){
return HtmlService.createHtmlOutputFromFile(filename).getContent();
}