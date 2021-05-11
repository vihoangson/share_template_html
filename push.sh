echo '==========Script push source in folder=========='
git add . && git commit -m 'update daily report' 
echo '==========git pull=========='
git pull 
echo '==========git push=========='
git push

# explorer "D:\15. Manual"
read -p "Done!!! Press enter to exit"
