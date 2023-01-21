<?php   

class Faq extends Model {
    public $id;
    public $question;
    public $answer;
    public $datetime;

    public static function getAllFaqs() {
        $db = new Database();

        $query = "SELECT * FROM `faq`;";
        $faqs = [];
        $statement = $db->pdo->prepare($query);
        $statement->execute();
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $r) {
            $faqs[] = new Faq([
                'id'=>$r["faq_id"], 
                'question'=>$r["faq_question"], 
                'answer'=>$r["faq_answer"], 
                'datetime'=>$r["faq_datetime"], 
            ]);
        }
        
        return $faqs;
    }
}