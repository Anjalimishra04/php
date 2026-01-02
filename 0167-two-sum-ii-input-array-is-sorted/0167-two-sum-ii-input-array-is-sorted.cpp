class Solution {
public:
    vector<int> twoSum(vector<int>& numbers, int target) {
        int n= numbers.size();
        int i=0;
        int j=n-1;
        int sum=0;
        vector<int>arr;
        while(i<j)
        {
            sum=numbers[i]+numbers[j];
            if(sum== target)
            {
                arr.push_back(i+1);
                arr.push_back(j+1);
                break;
        
            }
            else if(sum>target){
                j--;
            }
            else{
                i++;
            }

        }
         return arr;
    }
};