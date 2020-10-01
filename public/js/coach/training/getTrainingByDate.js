import {getTrainingByDate} from "../../particles/getTrainingByDate";

const URL_PATH = "coach/trainingByDate";
function coachGetTrainingByDate(date){

    var training = getTrainingByDate(date, URL_PATH);

    return training;
}
export {coachGetTrainingByDate};