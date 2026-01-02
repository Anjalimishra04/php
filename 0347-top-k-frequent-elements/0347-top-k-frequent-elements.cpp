class Solution {
public:
    vector<int> topKFrequent(vector<int>& nums, int k) {
        vector<int>res;
        int n=nums.size();
        unordered_map<int,int>mpp;
        for(auto i=0;i<n;i++)
        {
            mpp[nums[i]]++;
        }
        priority_queue<pair<int,int> ,vector<pair<int,int>> ,greater<pair<int,int>>>pq;
        for(auto it:mpp)
        {
            pq.push({it.second,it.first});
        }
        while(pq.size()>k){
            pq.pop();
        }
        while(pq.empty()!=true){
            auto x = pq.top(); 
             pq.pop();   
            res.push_back(x.second);
        }
        return  res;
    }
};