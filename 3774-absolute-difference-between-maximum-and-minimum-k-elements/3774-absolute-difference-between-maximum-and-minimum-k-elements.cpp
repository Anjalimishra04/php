class Solution {
public:
    int absDifference(vector<int>& nums, int k) {
        int n= nums.size();
        int sum1 = 0;
        int sum2 = 0;
        int t=0;
        sort(nums.begin(),nums.end());
        for(int i=0;i<k;i++)
        {
            sum1+=nums[i];
        }
        for(int j=n-1;j>=n-k;j--)
        {
            sum2+=nums[j];
        }
        t=sum2-sum1;
        return t ;
    }
    
};