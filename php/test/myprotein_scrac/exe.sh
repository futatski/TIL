#/bin/sh

LOG_DIR="log"

# taurine
php makeSubComment.php 10530308 | tee -a $LOG_DIR/taurine_250.log
php makeSubComment.php 10530306 | tee -a $LOG_DIR/taurine_500.log
php makeSubComment.php 10530304 | tee -a $LOG_DIR/taurine_1000.log

# protain
php makeSubComment.php 11058330 | tee -a $LOG_DIR/protain_choco_bri.log

