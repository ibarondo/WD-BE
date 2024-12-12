<?php
class islandCard {
  public $islandID;
  public $name;
  public $shortDesc;
  public $color;
  public $islandImage;

  public function __construct($islandID, $name, $shortDesc, $color, $islandImage) {
    $this->islandID = $islandID;
    $this->name = $name;
    $this->shortDesc = $shortDesc;
    $this->color = $color;
    $this->islandImage = $islandImage;
  }
public function buildCard() {
    $col1 = ($this->islandID % 2 == 0) ? " order-1 order-md-2" : "";
    $col2 = ($this->islandID % 2 == 0) ? " order-2 order-md-1" : "";

    return 
    '
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="view.php?id='.$this->islandID.'" style="text-decoration: none;">
          <div class="w3-card w3-hover-shadow" style="padding: 16px; border-radius: 8px; background-color: '.$this->color.'; color: black ; height: 410px;">
            <img src="assets/img/'.$this->islandImage.'" class="card-img" alt="'.$this->name.'" style="width: 100%; border-radius: 8px; object-fit: cover;">
            <h3 class="mt-2" style="font-size: 25px">'.$this->name.'</h3>
            <p class="w3-opacity mt-2 mb-4">'.$this->shortDesc.'</p>
          </div>
        </a>
      </div>
    ';
}
}

class islandContent {
    public $islandID;
    public $islandName;
    public $islandImage;
    public $islandColor;
    public $contentImage;
    public $content;
    public $description;

    public function __construct($islandID, $islandName, $islandImage, $islandColor, $contentImage, $content, $description) {
        $this->islandID = $islandID;
        $this->islandName = $islandName;
        $this->islandImage = $islandImage;
        $this->islandColor = $islandColor;
        $this->contentImage = $contentImage;
        $this->content = $content;
        $this->description = $description;
    }

    public function buildContent() {
        $alt = str_replace("<br>", "", $this->content);
        return '
            <div class="col-xl-4 col-md-4 col-sm-12 mb-3">
                <div class="card" style="border-top: .6rem solid '.$this->islandColor.'; border-bottom: .6rem solid '.$this->islandColor.'">
                    <div class="card-image-wrapper">
                        <img src="assets/img/'.$this->contentImage.'" class="card-img-top" alt="Project Image">
                        <div class="card-body-overlay">
                          <h4 class="card-title">'.$this->content.'</h4>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
}    


?>