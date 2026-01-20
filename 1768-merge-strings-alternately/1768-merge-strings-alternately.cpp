class Solution {
public:
    string mergeAlternately(string word1, string word2) {
        int n= word1.size();
        int q = word2.size();
        string merge = "";
        int i = 0;
        int j=0;
        while(i<n || j<q)
        {
            if(i<n)
            {
                merge += word1[i];
                i++;
            }
            if(j<q)
            {
                merge +=word2[j];
                j++;
            }
            
        }
        return merge;
    }
      
};