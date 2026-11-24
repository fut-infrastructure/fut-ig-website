# Saturation and pulse device group (extra) — completed - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Saturation and pulse device group (extra) — completed**

## Example ServiceRequest: Saturation and pulse device group (extra) — completed

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.1/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-07-07 09:00:00+0000 --> 2025-11-17 12:00:00+0000](EpisodeOfCare-p02-eoc1.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: true

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Completed
* period: 2025-07-07 09:05:00+0000 --> (ongoing)

**instantiatesCanonical**: [Iltmætning og pulsmåling](ActivityDefinition-ad-extra-sat-pulse.md)

**status**: Completed

**intent**: Order

**code**: Same device group

**subject**: [Ulrik Møller (official) Male, DoB: 1998-01-15 ( urn:oid:1.2.208.176.1.2#Danish civil registration system - CPR#1501989971 (use: official))](Patient-p02.md)

**occurrence**: Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p02-cp1-sr-extra-sat-pulse",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p02-eoc1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
    "valueBoolean" : true
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
    "valueCode" : "NO_TRIGGER"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "completed"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-07-07T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-sat-pulse"],
  "status" : "completed",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "SDG"
    }]
  },
  "subject" : {
    "reference" : "Patient/p02"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2025-07-07T09:05:00+00:00",
        "end" : "2025-11-17T11:55:00+00:00"
      }
    }
  }
}

```
