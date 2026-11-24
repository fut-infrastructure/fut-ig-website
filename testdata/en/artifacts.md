# Artifacts Summary - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

###  

| | |
| :--- | :--- |
| [ Patient 01  ](Patient-p01.md) | Test patient 01, CPR 0508754760. |
| [ Patient 02  ](Patient-p02.md) | Test patient 02, CPR 1501989971. |
| [ Patient 03  ](Patient-p03.md) | Test patient 03, CPR 2412589206. |
| [ Patient 04  ](Patient-p04.md) | Test patient 04, CPR 1311633801. |
| [ Patient 05  ](Patient-p05.md) | Test patient 05, CPR 0512894992. |
| [ Patient 06  ](Patient-p06.md) | Test patient 06, CPR 1207969563. |
| [ Patient 07  ](Patient-p07.md) | Test patient 07, CPR 1509829345. |
| [ Patient 08  ](Patient-p08.md) | Test patient 08, CPR 1512543258. |
| [ Patient 09  ](Patient-p09.md) | Test patient 09, CPR 1905839388. |
| [ Patient 10  ](Patient-p10.md) | Test patient 10, CPR 0510049527. |
| [ Practitioner (placeholder)  ](Practitioner-practitioner-placeholder.md) | Stands in for a practitioner on the care team the scenario runs under. The loader substitutes a real one. |
| [ Practitioner telma  ](Practitioner-practitioner-xa.md) | Practitioner for telma, assigned on a care team for telma. |
| [ Practitioner kpro  ](Practitioner-practitioner-xb.md) | Practitioner for kpro, assigned on a care team for kpro. |
| [ Practitioner fob  ](Practitioner-practitioner-xc.md) | Practitioner for fob, assigned on a care team for fob. |
| [ Practitioner telesaar  ](Practitioner-practitioner-xd.md) | Practitioner for telesaar, assigned on a care team for telesaar. |

###  

| | |
| :--- | :--- |
| [ Region Midtjylland  ](Organization-org-region-midtjylland.md) | Owner of the plan, its activities, the questionnaire and the automated-processing rules. |
| [ Region Nordjylland  ](Organization-org-region-nordjylland.md) | Managing organization for the episodes of care and the care teams that deliver the monitoring. |

###  

| | |
| :--- | :--- |
| [ Episode of care (completed)  ](EpisodeOfCare-p01-eoc1.md) | A completed episode of care for the same patient and the same COPD diagnosis, which ran for about four and a half months and closed well before the open one opened. Shows the closed period and the full status history that a finished episode carries. |
| [ Episode of care  ](EpisodeOfCare-p01-eoc2.md) | The open episode of care the monitoring plan is delivered under, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p02-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p02-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p03-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p03-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p04-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p04-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p05-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p05-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p06-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p06-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (completed)  ](EpisodeOfCare-p07-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p07-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (active)  ](EpisodeOfCare-p08-eoc1.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (active)  ](EpisodeOfCare-p09-eoc1.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 1 (active)  ](EpisodeOfCare-p10-eoc1.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 2 (active)  ](EpisodeOfCare-p10-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 3 (active)  ](EpisodeOfCare-p10-eoc3.md) | An open episode of care, addressing the COPD diagnosis. |
| [ Episode of care 4 (active)  ](EpisodeOfCare-p10-eoc4.md) | An open episode of care, addressing the COPD diagnosis. |

###  

| | |
| :--- | :--- |
| [ Care plan (completed)  ](CarePlan-p01-cp1.md) | The monitoring plan as delivered under the completed episode of care. Status completed, with the full status history and — following the environment's behaviour — a period that is left open. |
| [ Care plan (active)  ](CarePlan-p01-cp2.md) | The monitoring plan as delivered under the open episode of care. Normally created by $apply, which would also create one ServiceRequest per activity. |
| [ Care plan 1 (completed)  ](CarePlan-p02-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p02-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (completed)  ](CarePlan-p03-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p03-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (completed)  ](CarePlan-p04-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p04-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (completed)  ](CarePlan-p05-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p05-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (completed)  ](CarePlan-p06-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p06-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (completed)  ](CarePlan-p07-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p07-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 1 (active)  ](CarePlan-p08-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 1 (active)  ](CarePlan-p09-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 1 (active)  ](CarePlan-p10-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [ Care plan 2 (active)  ](CarePlan-p10-cp2.md) | The monitoring plan as delivered under episode of care 2. |
| [ Care plan 3 (active)  ](CarePlan-p10-cp3.md) | The monitoring plan as delivered under episode of care 3. |
| [ Care plan 4 (active)  ](CarePlan-p10-cp4.md) | The monitoring plan as delivered under episode of care 4. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p01-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p01-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p01-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p01-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p01-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p01-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p01-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p01-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p01-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p01-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p01-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p01-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p01-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p01-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p01-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p01-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p01-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p01-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p01-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p01-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p02-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p02-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p02-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p02-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p02-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p02-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p02-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p02-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p02-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p02-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p02-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p02-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p02-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p02-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p02-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p02-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p02-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p02-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p02-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p02-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p03-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p03-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p03-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p03-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p03-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p03-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p03-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p03-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p03-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p03-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p03-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p03-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p03-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p03-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p03-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p03-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p03-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p03-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p03-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p03-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p04-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p04-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p04-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p04-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p04-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p04-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p04-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p04-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p04-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p04-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p04-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p04-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p04-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p04-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p04-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p04-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p04-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p04-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p04-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p04-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p05-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p05-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p05-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p05-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p05-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p05-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p05-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p05-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p05-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p05-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p05-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p05-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p05-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p05-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p05-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p05-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p05-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p05-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p05-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p05-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p06-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p06-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p06-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p06-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p06-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p06-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p06-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p06-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p06-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p06-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p06-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p06-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p06-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p06-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p06-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p06-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p06-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p06-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p06-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p06-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra) — completed  ](ServiceRequest-p07-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra) — completed  ](ServiceRequest-p07-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra) — completed  ](ServiceRequest-p07-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra) — completed  ](ServiceRequest-p07-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra) — completed  ](ServiceRequest-p07-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled) — completed  ](ServiceRequest-p07-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p07-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p07-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p07-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p07-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p07-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p07-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p07-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p07-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p07-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p07-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p07-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p07-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p07-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p07-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p08-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p08-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p08-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p08-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p08-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p08-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p08-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p08-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p08-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p08-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p08-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p08-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p08-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p08-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p09-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p09-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p09-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p09-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p09-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p09-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p09-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p09-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p09-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p09-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p09-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p09-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p09-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p09-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p10-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p10-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p10-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p10-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p10-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p10-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p10-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p10-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p10-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p10-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p10-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p10-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p10-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p10-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p10-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p10-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p10-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p10-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p10-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p10-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p10-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p10-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p10-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p10-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p10-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p10-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p10-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p10-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p10-cp3-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p10-cp3-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p10-cp3-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p10-cp3-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p10-cp3-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p10-cp3-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p10-cp3-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p10-cp3-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p10-cp3-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p10-cp3-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p10-cp3-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p10-cp3-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p10-cp3-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p10-cp3-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ Closing (scheduled)  ](ServiceRequest-p10-cp4-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [ Head activity (extra)  ](ServiceRequest-p10-cp4-sr-extra-head.md) | The container for the unscheduled branch. |
| [ Pulse (extra)  ](ServiceRequest-p10-cp4-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [ Questionnaire (extra)  ](ServiceRequest-p10-cp4-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [ Saturation and pulse device group (extra)  ](ServiceRequest-p10-cp4-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [ Oxygen saturation (extra)  ](ServiceRequest-p10-cp4-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [ Head activity (scheduled)  ](ServiceRequest-p10-cp4-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [ Introduction (scheduled)  ](ServiceRequest-p10-cp4-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [ Pulse (scheduled)  ](ServiceRequest-p10-cp4-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [ Questionnaire (scheduled)  ](ServiceRequest-p10-cp4-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [ Saturation and pulse device group (scheduled)  ](ServiceRequest-p10-cp4-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [ Saturation and pulse introduction (scheduled)  ](ServiceRequest-p10-cp4-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [ Saturation and pulse preparation (scheduled)  ](ServiceRequest-p10-cp4-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [ Oxygen saturation (scheduled)  ](ServiceRequest-p10-cp4-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [ KOL care team (placeholder)  ](CareTeam-careteam-placeholder.md) | Stands in for the care team the scenario runs under. The loader substitutes a real one. |
| [ KOL care team for telma  ](CareTeam-careteam-xa.md) | The care team responsible for the COPD monitoring under telma. |
| [ KOL care team for kpro  ](CareTeam-careteam-xb.md) | The care team responsible for the COPD monitoring under kpro. |
| [ KOL care team for fob  ](CareTeam-careteam-xc.md) | The care team responsible for the COPD monitoring under fob. |
| [ KOL care team for telesaar  ](CareTeam-careteam-xd.md) | The care team responsible for the COPD monitoring under telesaar. |

###  

| | |
| :--- | :--- |
| [ Pulse 118/min (completed episode)  ](Observation-p01-cp1-pulse.md) | Pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (completed episode)  ](Observation-p01-cp1-sat.md) | Oxygen saturation submitted under the completed episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (open episode)  ](Observation-p01-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p01-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (completed episode)  ](Observation-p02-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the completed episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (completed episode)  ](Observation-p02-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the completed episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (open episode)  ](Observation-p02-cp2-pulse.md) | Pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (open episode)  ](Observation-p02-cp2-sat.md) | Oxygen saturation submitted under the open episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (completed episode)  ](Observation-p03-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the completed episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (completed episode)  ](Observation-p03-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the completed episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (open episode)  ](Observation-p03-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p03-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (completed episode)  ](Observation-p04-cp1-pulse.md) | Pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (completed episode)  ](Observation-p04-cp1-sat.md) | Oxygen saturation submitted under the completed episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (open episode)  ](Observation-p04-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p04-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (completed episode)  ](Observation-p05-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the completed episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (completed episode)  ](Observation-p05-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the completed episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (open episode)  ](Observation-p05-cp2-pulse.md) | Pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (open episode)  ](Observation-p05-cp2-sat.md) | Oxygen saturation submitted under the open episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (completed episode)  ](Observation-p06-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the completed episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (completed episode)  ](Observation-p06-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the completed episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (open episode)  ](Observation-p06-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p06-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (completed episode)  ](Observation-p07-cp1-pulse.md) | Pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (completed episode)  ](Observation-p07-cp1-sat.md) | Oxygen saturation submitted under the completed episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (open episode)  ](Observation-p07-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p07-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (open episode)  ](Observation-p08-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p08-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 72/min (open episode)  ](Observation-p09-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p09-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (open episode)  ](Observation-p10-cp1-pulse.md) | Pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (open episode)  ](Observation-p10-cp1-sat.md) | Oxygen saturation submitted under the open episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (open episode)  ](Observation-p10-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p10-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Pulse 118/min (open episode)  ](Observation-p10-cp3-pulse.md) | Pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so triage returns yellow and raises a task with priority urgent. |
| [ Oxygen saturation 84% (open episode)  ](Observation-p10-cp3-sat.md) | Oxygen saturation submitted under the open episode. 84% is at or below the red absolute range of 85%, so triage returns red and raises a task with priority asap. |
| [ Pulse 72/min (open episode)  ](Observation-p10-cp4-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [ Oxygen saturation 96% (open episode)  ](Observation-p10-cp4-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [ Questionnaire response, exacerbation (completed episode)  ](QuestionnaireResponse-p01-cp1-qr.md) | A symptom questionnaire answered under the completed episode during an exacerbation. Breathlessness 'En del' and greenish sputum both carry red significance, so triage returns red and raises a task with priority asap. |
| [ Questionnaire response, no symptoms (open episode)  ](QuestionnaireResponse-p01-cp2-qr.md) | A symptom questionnaire answered under the open episode with no symptoms reported. Every answer carries green significance, so triage returns green and the resulting task is routine. |
| [ Questionnaire response, mild symptoms (completed episode)  ](QuestionnaireResponse-p02-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, exacerbation (open episode)  ](QuestionnaireResponse-p02-cp2-qr.md) | A symptom questionnaire answered under the open episode. 5 scored answers — 4 red, 1 yellow — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, no symptoms (completed episode)  ](QuestionnaireResponse-p03-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |
| [ Questionnaire response, mild symptoms (open episode)  ](QuestionnaireResponse-p03-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, exacerbation (completed episode)  ](QuestionnaireResponse-p04-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 3 red, 1 yellow — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, mild symptoms (open episode)  ](QuestionnaireResponse-p04-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, no symptoms (completed episode)  ](QuestionnaireResponse-p05-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |
| [ Questionnaire response, exacerbation (open episode)  ](QuestionnaireResponse-p05-cp2-qr.md) | A symptom questionnaire answered under the open episode. 5 scored answers — 3 red, 1 yellow, 1 green — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, mild symptoms (completed episode)  ](QuestionnaireResponse-p06-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 3 yellow, 1 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, no symptoms (open episode)  ](QuestionnaireResponse-p06-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |
| [ Questionnaire response, exacerbation (completed episode)  ](QuestionnaireResponse-p07-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 3 red, 1 yellow — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, no symptoms (open episode)  ](QuestionnaireResponse-p07-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |
| [ Questionnaire response, mild symptoms (open episode)  ](QuestionnaireResponse-p08-cp1-qr.md) | A symptom questionnaire answered under the open episode. 5 scored answers — 1 yellow, 4 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, no symptoms (open episode)  ](QuestionnaireResponse-p09-cp1-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |
| [ Questionnaire response, exacerbation (open episode)  ](QuestionnaireResponse-p10-cp1-qr.md) | A symptom questionnaire answered under the open episode. 5 scored answers — 1 red, 3 yellow, 1 green — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, mild symptoms (open episode)  ](QuestionnaireResponse-p10-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 1 yellow, 3 green — so triage returns yellow and the resulting task is urgent. |
| [ Questionnaire response, exacerbation (open episode)  ](QuestionnaireResponse-p10-cp3-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 3 red, 1 green — so triage returns red and the resulting task is asap. |
| [ Questionnaire response, no symptoms (open episode)  ](QuestionnaireResponse-p10-cp4-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |

###  

| | |
| :--- | :--- |
| [ Chronic obstructive pulmonary disease (completed episode)  ](Condition-p01-eoc1-cond.md) | The COPD diagnosis as recorded under the completed episode of care. The same diagnosis as the other Condition: each episode carries its own, because a Condition can reference only one episode. |
| [ Chronic obstructive pulmonary disease  ](Condition-p01-eoc2-cond.md) | The COPD diagnosis the episode of care addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p02-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p02-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p03-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p03-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p04-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p04-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p05-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p05-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p06-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p06-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p07-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p07-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p08-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p09-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 1)  ](Condition-p10-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 2)  ](Condition-p10-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 3)  ](Condition-p10-eoc3-cond.md) | The COPD diagnosis episode of care 3 addresses and the monitoring plan responds to. |
| [ Chronic obstructive pulmonary disease (episode 4)  ](Condition-p10-eoc4-cond.md) | The COPD diagnosis episode of care 4 addresses and the monitoring plan responds to. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p01-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p01-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. Five scored answers, three red and two yellow; the rule takes the highest, so the overall assessment is red. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p01-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p01-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p01-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. Four scored answers, all green, so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p01-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p02-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p02-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 1 yellow, 3 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p02-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p02-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p02-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 5 scored answers — 4 red, 1 yellow — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p02-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p03-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p03-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p03-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p03-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p03-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 1 yellow, 3 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p03-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p04-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p04-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 3 red, 1 yellow — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p04-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p04-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p04-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 1 yellow, 3 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p04-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p05-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p05-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p05-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p05-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p05-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 5 scored answers — 3 red, 1 yellow, 1 green — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p05-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p06-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p06-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 3 yellow, 1 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p06-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p06-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p06-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p06-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p07-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p07-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 3 red, 1 yellow — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p07-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p07-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p07-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p07-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p08-cp1-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p08-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 5 scored answers — 1 yellow, 4 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p08-cp1-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p09-cp1-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p09-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p09-cp1-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p10-cp1-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p10-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 5 scored answers — 1 red, 3 yellow, 1 green — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p10-cp1-ci-sat.md) | Triage result for the saturation submitted under the open episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p10-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — yellow  ](ClinicalImpression-p10-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 1 yellow, 3 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p10-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of pulse 118/min — yellow  ](ClinicalImpression-p10-cp3-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 118/min falls in the upper yellow range of 110 to 130, so the finding is 'outside reference range' with the GAL coding, and the overall assessment yellow. |
| [ Triage of the questionnaire response — red  ](ClinicalImpression-p10-cp3-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 3 red, 1 green — so the overall assessment is red. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 84% — red  ](ClinicalImpression-p10-cp3-ci-sat.md) | Triage result for the saturation submitted under the open episode. 84% is at or below the red alarm range of 85%, so the finding is 'outside reference range' with the RAL coding, and the overall assessment red. |
| [ Triage of pulse 72/min — green  ](ClinicalImpression-p10-cp4-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [ Triage of the questionnaire response — green  ](ClinicalImpression-p10-cp4-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [ Triage of saturation 96% — green  ](ClinicalImpression-p10-cp4-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |

###  

| | |
| :--- | :--- |
| [ Submission under the completed episode  ](Provenance-p01-cp1-prov.md) | The submit record for the completed episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the open episode  ](Provenance-p01-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the completed episode  ](Provenance-p02-cp1-prov.md) | The submit record for the completed episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p02-cp2-prov.md) | The submit record for the open episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the completed episode  ](Provenance-p03-cp1-prov.md) | The submit record for the completed episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p03-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the completed episode  ](Provenance-p04-cp1-prov.md) | The submit record for the completed episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the open episode  ](Provenance-p04-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the completed episode  ](Provenance-p05-cp1-prov.md) | The submit record for the completed episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p05-cp2-prov.md) | The submit record for the open episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the completed episode  ](Provenance-p06-cp1-prov.md) | The submit record for the completed episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p06-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the completed episode  ](Provenance-p07-cp1-prov.md) | The submit record for the completed episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the open episode  ](Provenance-p07-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p08-cp1-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p09-cp1-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p10-cp1-prov.md) | The submit record for the open episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the open episode  ](Provenance-p10-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [ Submission under the open episode  ](Provenance-p10-cp3-prov.md) | The submit record for the open episode, made while the plan was still active. Triage should return red for the saturation and the questionnaire, and yellow for the pulse. |
| [ Submission under the open episode  ](Provenance-p10-cp4-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |

###  

| | |
| :--- | :--- |
| [ Assess pulse triage — urgent  ](Task-p01-cp1-task-pulse.md) | Task for the yellow pulse result under the completed episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p01-cp1-task-qr.md) | Task for the red questionnaire result under the completed episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p01-cp1-task-sat.md) | Task for the red saturation result under the completed episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p01-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p01-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p01-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p02-cp1-task-pulse.md) | Task for the green pulse result under the completed episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p02-cp1-task-qr.md) | Task for the green questionnaire result under the completed episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p02-cp1-task-sat.md) | Task for the green saturation result under the completed episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p02-cp2-task-pulse.md) | Task for the yellow pulse result under the open episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p02-cp2-task-qr.md) | Task for the red questionnaire result under the open episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p02-cp2-task-sat.md) | Task for the red saturation result under the open episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p03-cp1-task-pulse.md) | Task for the green pulse result under the completed episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p03-cp1-task-qr.md) | Task for the green questionnaire result under the completed episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p03-cp1-task-sat.md) | Task for the green saturation result under the completed episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p03-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p03-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p03-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p04-cp1-task-pulse.md) | Task for the yellow pulse result under the completed episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p04-cp1-task-qr.md) | Task for the red questionnaire result under the completed episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p04-cp1-task-sat.md) | Task for the red saturation result under the completed episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p04-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p04-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p04-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p05-cp1-task-pulse.md) | Task for the green pulse result under the completed episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p05-cp1-task-qr.md) | Task for the green questionnaire result under the completed episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p05-cp1-task-sat.md) | Task for the green saturation result under the completed episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p05-cp2-task-pulse.md) | Task for the yellow pulse result under the open episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p05-cp2-task-qr.md) | Task for the red questionnaire result under the open episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p05-cp2-task-sat.md) | Task for the red saturation result under the open episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p06-cp1-task-pulse.md) | Task for the green pulse result under the completed episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p06-cp1-task-qr.md) | Task for the green questionnaire result under the completed episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p06-cp1-task-sat.md) | Task for the green saturation result under the completed episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p06-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p06-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p06-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p07-cp1-task-pulse.md) | Task for the yellow pulse result under the completed episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p07-cp1-task-qr.md) | Task for the red questionnaire result under the completed episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p07-cp1-task-sat.md) | Task for the red saturation result under the completed episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p07-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p07-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p07-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p08-cp1-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p08-cp1-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p08-cp1-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — routine  ](Task-p09-cp1-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p09-cp1-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p09-cp1-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p10-cp1-task-pulse.md) | Task for the yellow pulse result under the open episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p10-cp1-task-qr.md) | Task for the red questionnaire result under the open episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p10-cp1-task-sat.md) | Task for the red saturation result under the open episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p10-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — urgent  ](Task-p10-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p10-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |
| [ Assess pulse triage — urgent  ](Task-p10-cp3-task-pulse.md) | Task for the yellow pulse result under the open episode. Priority urgent, because the value fell in a GAL range. |
| [ Evaluate questionnaire response triage — asap  ](Task-p10-cp3-task-qr.md) | Task for the red questionnaire result under the open episode. Priority asap, because the highest answer significance was red. |
| [ Assess saturation triage — asap  ](Task-p10-cp3-task-sat.md) | Task for the red saturation result under the open episode. Priority asap, because the value fell in a RAL range. |
| [ Assess pulse triage — routine  ](Task-p10-cp4-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [ Evaluate questionnaire response triage — routine  ](Task-p10-cp4-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [ Assess saturation triage — routine  ](Task-p10-cp4-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |

###  

| | |
| :--- | :--- |
| [ COPD monitoring plan (oxygen saturation, pulse and questionnaire)  ](PlanDefinition-plandefinition.md) | COPD monitoring plan with a scheduled mon/wed/fri branch and an unscheduled extra branch, each carrying the saturation and pulse device group and the symptom questionnaire. One submission against the extra branch yields one questionnaire response and two observations. |
| [ Closing  ](ActivityDefinition-ad-closing.md) | Closing guidance for a scheduled round. |
| [ Extra head activity  ](ActivityDefinition-ad-extra-head.md) | Container for the unscheduled saturation, pulse and questionnaire. |
| [ Extra pulse  ](ActivityDefinition-ad-extra-pulse.md) | Unscheduled heart rate, with the same absolute thresholds as the scheduled one. |
| [ Extra questionnaire  ](ActivityDefinition-ad-extra-questionnaire.md) | Unscheduled Master Questionnaire activity, composed of the same questionnaire as the scheduled one. |
| [ Extra oxygen saturation and pulse (same device group)  ](ActivityDefinition-ad-extra-sat-pulse.md) | The unscheduled same-device group. |
| [ Extra oxygen saturation  ](ActivityDefinition-ad-extra-saturation.md) | Unscheduled oxygen saturation, with the same absolute thresholds as the scheduled one. |
| [ Head activity  ](ActivityDefinition-ad-head.md) | Container for the scheduled saturation, pulse and questionnaire. |
| [ Introduction  ](ActivityDefinition-ad-intro.md) | Opening guidance for a scheduled round. |
| [ Pulse  ](ActivityDefinition-ad-pulse.md) | Heart rate, triaged against absolute thresholds: red at or below 50 and at or above 130, yellow either side of the 60-110 green band. |
| [ Questionnaire  ](ActivityDefinition-ad-questionnaire.md) | Master Questionnaire activity presenting the symptom questionnaire, the single questionnaire of this plan. |
| [ Oxygen saturation and pulse (same device group)  ](ActivityDefinition-ad-sat-pulse.md) | The same-device group: one pulse oximeter, one patient action, two values. Its children are the saturation and the pulse. |
| [ Oxygen saturation and pulse measurement  ](ActivityDefinition-ad-sat-pulse-intro.md) | Guidance shown before the saturation and pulse measurement: warm the hands, and what the reading involves. |
| [ Preparation  ](ActivityDefinition-ad-sat-pulse-prep.md) | Immediate preparation: sit still for five minutes beforehand and keep the hand steady during the reading. |
| [ Oxygen saturation  ](ActivityDefinition-ad-saturation.md) | Oxygen saturation, triaged against absolute thresholds: red at or below 85%, yellow up to 88%, green above. |
| [ COPD questionnaire  ](Questionnaire-questionnaire.md) | COPD symptom questionnaire: treatment status, three symptom scales, sputum colour and a conditional comment. Eighteen answer-significance mappings across green, yellow and red. |
| [ observation-absolute-range-triage  ](Library-library-observation-absolute-triage.md) | Triages a submitted observation against absolute thresholds expressed in the observation's own unit. Reads the reference ranges from the observation it is given, so a measurement must carry them to be assessed; a GAL range yields a yellow assessment and a RAL range a red one. |
| [ questionnaire-response-triage-on-answersignificance  ](Library-library-questionnaire-triage.md) | Triages a submitted questionnaire response by matching each answer against the answer-significance mappings on the questionnaire, and recording one finding basis per answered question alongside the overall assessment. |

###  

| | |
| :--- | :--- |
| [ Loader settings  ](Parameters-loader-settings.md) | Read by the loader, never loaded. anchorDate is the day the scenario is written for: it maps to the load date, and every date in the data shifts by the same number of days. Table pairing the coexistence tag with the programme it runs: the loader substitutes ${COEXISTENCE_TAG} and ${EHEALTH_PROGRAM} together, making one copy of the vendor-scoped data per vendor listed here. |
| [ Loader code systems  ](Bundle-loader-codesystems.md) | Read by the loader, never loaded. The ehealth-system and ehealth-program CodeSystems of dk.ehealth.sundhed.fhir.ig.core: the loader checks the coexistence tags against them, and adds any codes the terminology service lacks. |

