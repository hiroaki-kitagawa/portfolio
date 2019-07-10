var spending = new Vue( {
  el: '#spending',
  data: {
    fixedIncome: '',
    extraIncome: '',
    sumSpending: {
      sumFixed: '',
      sumVar: '',
      sumSelfInvest: '',
      sumSaveInvest: ''
    },
    rent: {
      budget: '',
      fixed: '',
      diff: ''
    },
    insurance: {
      budget: '',
      fixed: '',
      diff: ''
    },
    otherFix: {
      budget: '',
      fixed: '',
      diff: ''
    },
    util: {
      budget: '',
      fixed: '',
      diff: ''
    },
    food: {
      budget: '',
      fixed: '',
      diff: ''
    },
    daily: {
      budget: '',
      fixed: '',
      diff: ''
    },
    transportation: {
      budget: '',
      fixed: '',
      diff: ''
    },
    automotive: {
      budget: '',
      fixed: '',
      diff: ''
    },
    otherVar: {
      budget: '',
      fixed: '',
      diff: ''
    },
    communication: {
      budget: '',
      fixed: '',
      diff: ''
    },
    education: {
      budget: '',
      fixed: '',
      diff: ''
    },
    medical: {
      budget: '',
      fixed: '',
      diff: ''
    },
    cloth: {
      budget: '',
      fixed: '',
      diff: ''
    },
    allowance: {
      budget: '',
      fixed: '',
      diff: ''
    },
    pocketmoney: {
      budget: '',
      fixed: '',
      diff: ''
    },
    favorite: {
      budget: '',
      fixed: '',
      diff: ''
    },
    otherSelfInvestment: {
      budget: '',
      fixed: '',
      diff: ''
    },
    save: {
      budget: '',
      fixed: '',
      diff: ''
    },
    investment: {
      budget: '',
      fixed: '',
      diff: ''
    },
    otherInvestment: {
      budget: '',
      fixed: '',
      diff: ''
    },
    },
    computed: {
      sumFixed: function ()
      {
        return this.rent.fixed + this.insurance.fixed + this.otherFix.fixed
      },
      sumVar: function ()
      {
        return this.util.fixed + this.food.fixed + this.daily.fixed + this.transportation.fixed + this.automotive.fixed + this.otherVar.fixed
      },
      sumSelfInvest: function ()
      {
        return this.communication.fixed + this.education.fixed + this.medical.fixed + this.cloth.fixed + this.allowance.fixed + this.pocketmoney.fixed + this.favorite.fixed + this.otherSelfInvestment.fixed
      },
      sumSaveInvest: function ()
      {
        return this.save.fixed + this.investment.fixed + this.otherInvestment.fixed
      }

    }
  }
} );
