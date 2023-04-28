username=$1

result=$(mysql -u root -p -e "SELECT table_schema $username, ROUND(SUM(data_length + index_length) / 1024 / 1024, 1) 
"DB Size in MB" FROM information_schema.tables GROUP BY table_schema; 
")

# Print the result to the console
echo "$result"

