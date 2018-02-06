<?php
error_reporting(0);
$xmlData = "
<data>
		<product>
                    <priipCloudProductTemplate>
                        otc
                    </priipCloudProductTemplate>
                    
                    <priipCloudProductType>
                        fxSwap
                    </priipCloudProductType>

                <productIdentifier>
                        RBI_fxSwap_EURUSD_long_1Y2D_EUR
                </productIdentifier>
		</product>

		<manufacturer>
			<id>
				rbi
			</id>

			<nameLong>
				Raiffeisen Bank International AG
			</nameLong>

			<nameShort>
				RBI
			</nameShort>

			<address>
				Am Stadtpark 9, 1030 Wien, Austria
			</address>

			<telephoneNumber>
				+43 1 71707 0
			</telephoneNumber>

			<website>
				http://www.rbinternational.com
			</website>

			<email>
				complaints@rbinternational.com
			</email>
		</manufacturer>

		<document>
			<type>final</type>
		</document>

		<properties>
			<includeEarlyRedemptionInExtraordinaryEventsAlert>
				true
			</includeEarlyRedemptionInExtraordinaryEventsAlert>
		</properties>

		<tradeDate>
			2018-01-18
		</tradeDate>

		<effectiveDate>
			2018-01-20
		</effectiveDate>
		<fxSwap>
			<holder>client</holder>
			<currencyPair>EURUSD</currencyPair>
			<notionalAmount>1000000</notionalAmount>
			<notionalAmountCurrency>EUR</notionalAmountCurrency>
			<terminationDate>2019-01-20</terminationDate>
			<forwardRate>
			<value>1.25620</value>
			</forwardRate>
			<spotRate>
			<value>1.2207</value>
			</spotRate>
		</fxSwap>

		<costs>
			<entryCosts>0.0025</entryCosts>
		</costs>

		<riskMeasures>
			<sriRelatedValues>
				<valueAtRisk>0</valueAtRisk>
				<valueAtRiskEquivalentVolatility>0</valueAtRiskEquivalentVolatility>
				<mrm>7</mrm>
				<crm>2</crm>
				<sri>7</sri>
			</sriRelatedValues>
			<performanceScenariosRelatedValues>
				<positiveScenarioPayoutRHP>11139.633068665</positiveScenarioPayoutRHP>
				<positiveScenarioActualReturnRHP>0.1139633069</positiveScenarioActualReturnRHP>
				<positiveScenarioAverageReturnPerYearRHP>0.114276</positiveScenarioAverageReturnPerYearRHP>
				<positiveScenarioPayoutIHP1>null</positiveScenarioPayoutIHP1>
				<positiveScenarioActualReturnIHP1>null</positiveScenarioActualReturnIHP1>
				<positiveScenarioAverageReturnPerYearIHP1>null</positiveScenarioAverageReturnPerYearIHP1>
				<positiveScenarioPayoutIHP2>null</positiveScenarioPayoutIHP2>
				<positiveScenarioActualReturnIHP2>null</positiveScenarioActualReturnIHP2>
				<positiveScenarioAverageReturnPerYearIHP2>null</positiveScenarioAverageReturnPerYearIHP2>
				<moderateScenarioPayoutRHP>9984.9790016645</moderateScenarioPayoutRHP>
				<moderateScenarioActualReturnRHP>-0.0015020998</moderateScenarioActualReturnRHP>
				<moderateScenarioAverageReturnPerYearRHP>-0.00150623</moderateScenarioAverageReturnPerYearRHP>
				<moderateScenarioPayoutIHP1>null</moderateScenarioPayoutIHP1>
				<moderateScenarioActualReturnIHP1>null</moderateScenarioActualReturnIHP1>
				<moderateScenarioAverageReturnPerYearIHP1>null</moderateScenarioAverageReturnPerYearIHP1>
				<moderateScenarioPayoutIHP2>null</moderateScenarioPayoutIHP2>
				<moderateScenarioActualReturnIHP2>null</moderateScenarioActualReturnIHP2>
				<moderateScenarioAverageReturnPerYearIHP2>null</moderateScenarioAverageReturnPerYearIHP2>
				<negativeScenarioPayoutRHP>8955.6992819847</negativeScenarioPayoutRHP>
				<negativeScenarioActualReturnRHP>-0.1044300718</negativeScenarioActualReturnRHP>
				<negativeScenarioAverageReturnPerYearRHP>-0.104717</negativeScenarioAverageReturnPerYearRHP>
				<negativeScenarioPayoutIHP1>null</negativeScenarioPayoutIHP1>
				<negativeScenarioActualReturnIHP1>null</negativeScenarioActualReturnIHP1>
				<negativeScenarioAverageReturnPerYearIHP1>null</negativeScenarioAverageReturnPerYearIHP1>
				<negativeScenarioPayoutIHP2>null</negativeScenarioPayoutIHP2>
				<negativeScenarioActualReturnIHP2>null</negativeScenarioActualReturnIHP2>
				<negativeScenarioAverageReturnPerYearIHP2>null</negativeScenarioAverageReturnPerYearIHP2>
				<stressScenarioPayoutRHP>6841.9699464563</stressScenarioPayoutRHP>
				<stressScenarioActualReturnRHP>-0.3158030054</stressScenarioActualReturnRHP>
				<stressScenarioAverageReturnPerYearRHP>-0.316671</stressScenarioAverageReturnPerYearRHP>
				<stressScenarioPayoutIHP1>null</stressScenarioPayoutIHP1>
				<stressScenarioActualReturnIHP1>null</stressScenarioActualReturnIHP1>
				<stressScenarioAverageReturnPerYearIHP1>null</stressScenarioAverageReturnPerYearIHP1>
				<stressScenarioPayoutIHP2>null</stressScenarioPayoutIHP2>
				<stressScenarioActualReturnIHP2>null</stressScenarioActualReturnIHP2>
				<stressScenarioAverageReturnPerYearIHP2>null</stressScenarioAverageReturnPerYearIHP2>
			</performanceScenariosRelatedValues>
		</riskMeasures>
		<costOutputs>
			<costsOverTime>
				<totalCostsRHP>
					<value>24.4219183409</value>
				</totalCostsRHP>
				<totalCostsIHP1>
					<value>null</value>
				</totalCostsIHP1>
				<totalCostsIHP2>
					<value>null</value>
				</totalCostsIHP2>
				<reductionInActualYieldRHP>
					<value>0.0024421918</value>
				</reductionInActualYieldRHP>
				<reductionInActualYieldIHP1>
					<value>null</value>
				</reductionInActualYieldIHP1>
				<reductionInActualYieldIHP2>
					<value>null</value>
				</reductionInActualYieldIHP2>
				<reductionInYieldRHP>
					<value>0.0024489008</value>
				</reductionInYieldRHP>
				<reductionInYieldIHP1>
					<value>null</value>
				</reductionInYieldIHP1>
				<reductionInYieldIHP2>
					<value>null</value>
				</reductionInYieldIHP2>
			</costsOverTime>
			<compositionOfCosts>
				<actualEntryCosts>
					<value>0.0024421918</value>
				</actualEntryCosts>
				<actualOtherRecurringCostsPA>
					<value>null</value>
				</actualOtherRecurringCostsPA>
				<actualExitCosts>
					<value>0</value>
				</actualExitCosts>
				<entryCosts>
					<value>0.0024489008</value>
				</entryCosts>
				<otherRecurringCostsPA>
					<value>null</value>
				</otherRecurringCostsPA>
				<exitCosts>
					<value>0</value>
				</exitCosts>
			</compositionOfCosts>
		</costOutputs>
    </data>
";

$pars = xml_parser_create();


xml_parse_into_struct($pars, $xmlData, $vals, $index);



//echo "PRODUCT DETAILS<br/><br/>";
$visited = 0;
    foreach ($vals as $val) 
    {

        //product details 
        if ($val['tag'] == 'PRODUCT' && $val['type'] =='open')
        {
            echo "PRODUCT DETAILS<br/><br/>"; 
        }
        if($val['tag'] == 'PRODUCT' && ($val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='PRIIPCLOUDPRODUCTTEMPLATE'){
                
                echo "Priip Cloud Product Template : {$val['value']}<br><br>\n";
            }
    
            if($val['tag']=='PRIIPCLOUDPRODUCTTYPE'){
                
                echo "Priip Cloud Product Type : {$val['value']}<br><br>\n";
            }
    
            if($val['tag']=='PRODUCTIDENTIFIER'){
                
                echo "Product Identifier  : {$val['value']}<br><br>\n";
            }
    
        }
    

        //manufacturer details
        if ($val['tag'] == 'MANUFACTURER' && $val['type'] =='open')
        {
            echo "<br/><br/><br/>MANUFACTURER DETAILS : <br/><br/>";
        }
        
        if($val['tag'] == 'MANUFACTURER' && ($val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='ID'){
                
                echo "ID : {$val['value']}<br><br>\n";
            }
    
            if($val['tag']=='NAMELONG'){
                
                echo "Name Long : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='ADDRESS'){
                
                echo "Address  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='TELEPHONENUMBER'){
                
                echo "Tel. Number  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='WEBSITE'){
                
                echo "Website  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='EMAIL'){
                
                echo "Email  : {$val['value']}<br><br>\n";
            }
    
        }//manufacturer else end

        //DOCUMENT

        if ($val['tag'] == 'DOCUMENT' && $val['type'] =='open')
        {
            echo "<br/><br/><br/>DOCUMENT DETAILS<br/><br/>"; 
        }
        if($val['tag'] == 'DOCUMENT' && ($val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='TYPE'){
                
                echo "Document Type : {$val['value']}<br><br>\n";
            }
    
        }

        //Properties

        if ($val['tag'] == 'PROPERTIES' && $val['type'] =='open')
        {
            echo "<br/><br/><br/>PROPERTIES <br/><br/>"; 
        }
        if($val['tag'] == 'PROPERTIES' && ($val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='INCLUDEEARLYREDEMPTIONINEXTRAORDINARYEVENTSALERT'){
                
                echo "INCLUDE EARLY REDEMPTION IN EXTRA ORDINARY EVENTS ALERT  : {$val['value']}<br><br>\n";
            }
    
        }

   


        //Trade Date

        if ($val['tag'] == 'TRADEDATE')
        {
            echo "<br/><br/><br/>TRADE DATE <br/><br/>"; 
        }
        if($val['tag'] == 'TRADEDATE' && ($val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='TRADEDATE'){
                
                echo "TRADE DATE  : {$val['value']}<br><br>\n";
            }
    
        }


        //EFFECTIVEDATE

        if ($val['tag'] == 'EFFECTIVEDATE')
        {
            echo "<br/><br/><br/>EFFECTIVE DATE <br/><br/>"; 
        }
        if($val['tag'] == 'EFFECTIVEDATE' && ($val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='EFFECTIVEDATE'){
                
                echo "EFFECTIVE DATE  : {$val['value']}<br><br>\n";
            }
        }
    
        //FXSWAP 

        if ($val['tag'] == 'FXSWAP'&& $val['type'] =='open')
        {
            echo "<br/><br/><br/>FX SWAP DETAILS<br/><br/>"; 
        }
        if($val['tag'] == 'FXSWAP' && ($val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
        {
            continue;
        }

        else
        {

            if($val['tag']=='HOLDER')
            {
                
                echo "HOLDER  : {$val['value']}<br><br>\n";
            }

            if($val['tag']=='CURRENCYPAIR')
            {
                
                echo "CURRENCY PAIR  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='EURUSD')
            {
                
                echo "EUR USD  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='NOTIONALAMOUNT')
            {
                
                echo "NOTIONAL AMOUNT  : {$val['value']}<br><br>\n";
            }
            if($val['tag']=='NOTIONALAMOUNTCURRENCY')
            {
                
                echo "NOTIONAL AMOUNT CURRENCY  : {$val['value']}<br><br>\n";
            }

            if($val['tag']=='TERMINATIONDATE')
            {
                
                echo "TERMINATION DATE  : {$val['value']}<br><br>\n";
            }

            if($val['tag'] == 'FORWARDRATE' && ($val['type'] =='open' || $val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
            {
                continue;
            }

            if($val['tag'] == 'SPOTRATE' && ($val['type'] =='open' || $val['type'] =='complete' || $val['type'] =='cdata'|| $val['type'] == 'close'))
            {
                continue;
            }

            if($val['tag']=='VALUE')
            {
                    if($visited==0)
                    {
                        echo "FORWARD RATE : {$val['value']}<br><br>\n";
                        $visited = 1;
                    }
                    
                    if($visited == 1)
                    {
                        echo "SPOT RATE: {$val['value']}<br><br>\n";
                        $visited = -1;
                    }
                     
            }
            
         
        }




















         
}//for each loop end

    

//print_r($vals);
    //print_r('<br><br><br><br><br><br><br><br>');

?>